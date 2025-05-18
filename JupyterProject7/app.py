import streamlit as st
from streamlit_drawable_canvas import st_canvas
import numpy as np
from tensorflow.keras.models import load_model
from PIL import Image
import cv2
#python -m streamlit run C:\Users\marwa\PycharmProjects\JupyterProject7\app.py
# Charger le modèle
model = load_model("best.keras")

st.set_page_config(page_title="Reconnaissance Lettre Arabe", layout="centered")
st.title("🖌️ Reconnaissance de lettres arabes à main levée")

st.markdown("Dessinez une lettre arabe (fond noir, lettre blanche) ci-dessous :")

# Créer le canvas
drawing_mode = st.selectbox("Mode de dessin:", ("freedraw", "line", "rect", "circle"))

canvas_result = st_canvas(
    fill_color="rgba(255, 255, 255, 1)",  # Couleur de dessin blanche
    stroke_width=10,
    stroke_color="#FFFFFF",
    background_color="#000000",
    height=280,
    width=280,
    drawing_mode=drawing_mode,
    key="canvas",
)

if st.button("📷 Prédire"):
    if canvas_result.image_data is not None:
        img = canvas_result.image_data
        img = cv2.resize(img.astype(np.uint8), (32, 32))
        gray = cv2.cvtColor(img, cv2.COLOR_RGBA2GRAY)

        # 🔁 Traitement recommandé
        gray = cv2.rotate(gray, cv2.ROTATE_90_COUNTERCLOCKWISE)  # rotation selon le sens du dessin
        gray = cv2.GaussianBlur(gray, (3, 3), 0)  # lissage
        _, gray = cv2.threshold(gray, 50, 255, cv2.THRESH_BINARY)  # binarisation

        # Normalisation et reshape
        norm_img = gray / 255.0
        input_img = norm_img.reshape(1, 32, 32, 1)

        # Prédire
        prediction = model.predict(input_img)
        predicted_class = int(np.argmax(prediction))

        # Afficher les probabilités
        st.bar_chart(prediction[0])

        # Dictionnaire de correspondance des classes aux lettres arabes
        label_to_arabic = {
            0: 'أ',
            1: 'ب',
            2: 'ت',
            3: 'ث',
            4: 'ج',
            5: 'ح',
            6: 'خ',
            7: 'د',
            8: 'د(معجمة)',
            9: 'ر',
            10: 'ز',
            11: 'س',
            12: 'ش',
            13: 'ص',
            14: 'ض',
            15: 'tah',
            16: 'zah',
            17: 'ع',
            18: 'غ',
            19: 'ف',
            20: 'ق',
            21: 'ك',
            22: 'ل',
            23: 'م',
            24: 'ن',
            25: 'ه',
            26: 'و',
            27: 'ي'
        }

        # Affichage du résultat
        if predicted_class in label_to_arabic:
            predicted_letter = label_to_arabic[predicted_class]
            st.success(f"✅ Lettre prédite : **{predicted_letter}** (classe {predicted_class})")
        else:
            st.warning(f"Classe inconnue : {predicted_class}")
    else:
        st.warning("✏️ Dessinez d'abord quelque chose !")
