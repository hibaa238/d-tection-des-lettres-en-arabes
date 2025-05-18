import streamlit as st
from streamlit_drawable_canvas import st_canvas
import numpy as np
import cv2
from tensorflow.keras.models import load_model
import matplotlib.pyplot as plt
from PIL import Image
import base64

# Configuration de la page
st.set_page_config(
    page_title="Reconnaissance de lettres arabes manuscrites",
    page_icon="✒️",
    layout="wide"
)


# CSS personnalisé
def local_css():
    st.markdown("""
    <style>
    .main-header {
        color: #1E3A8A;
        text-align: center;
        padding: 10px;
        margin-bottom: 20px;
        border-bottom: 2px solid #3B82F6;
    }
    .result-container {
        padding: 15px;
        border-radius: 10px;
        background-color: #f8f9fa;
        margin-top: 15px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .footer {
        text-align: center;
        padding: 20px;
        font-size: 14px;
        color: #4B5563;
        border-top: 1px solid #E5E7EB;
        margin-top: 30px;
    }
    .sidebar-info {
        padding: 15px;
        border-radius: 8px;
        background-color: #EFF6FF;
        margin-bottom: 20px;
    }
    .canvas-container {
        display: flex;
        justify-content: center;
    }
    </style>
    """, unsafe_allow_html=True)


local_css()

# Charger le modèle
model = load_model("best.keras")

# Dictionnaire des classes
classes = [
    'حرف الألف', 'حرف الباء', 'حرف التاء', 'حرف الثاء', 'حرف الجيم', 'حرف الحاء', 'حرف الخاء', 'حرف الدال', 'حرف الذال',
    'حرف الراء', 'حرف الزاي', 'حرف السين', 'حرف الشين', 'حرف الصاد', 'حرف الضاد', 'حرف الطاء', 'حرف الظاء', 'حرف العين',
    'حرف الغين', 'حرف الفاء', 'حرف القاف', 'حرف الكاف', 'حرف اللام', 'حرف الميم', 'حرف النون', 'حرف الهاء', 'حرف الواو',
    'حرف الياء'
]

# Sidebar avec informations
st.sidebar.image(
    "FSTMlogo.png",
    use_column_width=True)

st.sidebar.markdown("""
<div class="sidebar-info">
<h3>À propos du projet</h3>
<p><b>Étudiant:</b> Drissi Marwane</p>
<p><b>Encadré par:</b> Prof. N Azouagh</p>
<p><b>Université:</b> Hassan2-Mohammedia</p>
<p><b>Faculté:</b> FST Mohammedia</p>
<p><b>Département:</b> Mathématiques</p>
<p><b>Année universitaire:</b> 2024-2025</p>
</div>
""", unsafe_allow_html=True)

st.sidebar.markdown("""
<div class="sidebar-info">
<h3>Instructions</h3>
<p>1. Écrivez une lettre arabe à main levée dans le canvas</p>
<p>2. Cliquez sur le bouton "Prédire"</p>
<p>3. Visualisez le résultat de la reconnaissance</p>
</div>
""", unsafe_allow_html=True)

# Disposition principale
col1, col2, col3 = st.columns([1, 3, 1])
with col2:
    st.markdown("<h1 class='main-header'>Reconnaissance de lettres arabes manuscrites</h1>", unsafe_allow_html=True)

    st.markdown(
        "<p style='text-align: center; font-size: 18px; margin-bottom: 25px;'>Dessinez une lettre arabe dans le cadre ci-dessous</p>",
        unsafe_allow_html=True)

    # Canvas de dessin avec centrage
    st.markdown("<div class='canvas-container'>", unsafe_allow_html=True)
    canvas_result = st_canvas(
        fill_color="white",
        stroke_width=10,
        stroke_color="white",
        background_color="black",
        height=280,
        width=280,
        drawing_mode="freedraw",
        key="canvas"
    )
    st.markdown("</div>", unsafe_allow_html=True)

    if canvas_result.image_data is not None:
        # Traitement de l'image
        img = canvas_result.image_data
        img = cv2.resize(img.astype(np.uint8), (32, 32))

        # Convertir RGBA -> niveaux de gris
        gray = cv2.cvtColor(img, cv2.COLOR_RGBA2GRAY)
        gray = cv2.flip(gray, 1)

        # Appliquer un flou léger
        gray = cv2.GaussianBlur(gray, (3, 3), 0)

        # Rotation
        gray = cv2.rotate(gray, cv2.ROTATE_90_COUNTERCLOCKWISE)

        # Normalisation
        input_img = gray / 255.0
        input_img = input_img.reshape(1, 32, 32, 1)

        col_a, col_b = st.columns([1, 2])

        with col_a:
            st.markdown("<h4 style='text-align: center;'>Image prétraitée</h4>", unsafe_allow_html=True)
            st.image(gray, clamp=True, width=150)

        # Bouton de prédiction stylisé
        predict_button = st.button("📷 Prédire la lettre", key="predict_button", use_container_width=True)

        if predict_button:
            with st.spinner("Analyse en cours..."):
                prediction = model.predict(input_img)
                predicted_index = np.argmax(prediction)
                predicted_label = classes[predicted_index]
                confidence = float(prediction[0][predicted_index]) * 100

            st.markdown(f"""
            <div class='result-container'>
                <h3 style='text-align: center; color: #1E3A8A;'>Résultat de la reconnaissance</h3>
                <p style='text-align: center; font-size: 24px; color: #047857;'><b>{predicted_label}</b></p>
                <p style='text-align: center; font-size: 16px;'>Confiance: {confidence:.1f}%</p>
            </div>
            """, unsafe_allow_html=True)

            # Afficher histogramme des probabilités
            fig, ax = plt.subplots(figsize=(10, 4))
            probabilities = prediction[0] * 100

            # Trouver les 5 prédictions les plus probables
            top_indices = np.argsort(probabilities)[-5:][::-1]
            top_classes = [classes[i] for i in top_indices]
            top_probs = [probabilities[i] for i in top_indices]

            # Créer un graphique coloré pour les principales prédictions
            colors = ['#3B82F6', '#60A5FA', '#93C5FD', '#BFDBFE', '#DBEAFE']
            ax.bar(top_classes, top_probs, color=colors)
            ax.set_ylabel('Probabilité (%)')
            ax.set_title('Top 5 des prédictions')
            plt.xticks(rotation=45, ha='right')
            plt.tight_layout()
            st.pyplot(fig)

# Pied de page
st.markdown("""
<div class='footer'>
    <p>© 2025 - Projet de Reconnaissance de Lettres Arabes - Tous droits réservés</p>
    <p>Développé dans le cadre du cours de [Nom du cours]</p>
</div>
""", unsafe_allow_html=True)