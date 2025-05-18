import streamlit as st
from streamlit_drawable_canvas import st_canvas
import numpy as np
import cv2
from tensorflow.keras.models import load_model
import matplotlib.pyplot as plt

# Charger le modèle
model = load_model("best.keras")

# Dictionnaire des classes
classes = [
    'حرف الألف', 'حرف الباء', 'حرف التاء', 'حرف الثاء', 'حرف الجيم', 'حرف الحاء', 'حرف الخاء', 'حرف الدال', 'حرف الذال',
    'حرف الراء', 'حرف الزاي', 'حرف السين', 'حرف الشين', 'حرف الصاد', 'حرف الضاد', 'حرف الطاء', 'حرف الظاء', 'حرف العين',
    'حرف الغين', 'حرف الفاء', 'حرف القاف', 'حرف الكاف', 'حرف اللام', 'حرف الميم', 'حرف النون', 'حرف الهاء', 'حرف الواو', 'حرف الياء'
]

st.title("Reconnaissance de lettres arabes manuscrites")

# Canvas de dessin
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

if canvas_result.image_data is not None:
    # Traitement de l'image
    img = canvas_result.image_data
    img = cv2.resize(img.astype(np.uint8), (32, 32))

    # Convertir RGBA -> niveaux de gris
    gray = cv2.cvtColor(img, cv2.COLOR_RGBA2GRAY)
    gray = cv2.flip(gray, 1)

    # Appliquer un flou léger
    gray = cv2.GaussianBlur(gray, (3, 3), 0)

    # Seuillage binaire
    #_, gray = cv2.threshold(gray, 50, 255, cv2.THRESH_BINARY)

    # (Optionnel) Tester une rotation si les prédictions sont mauvaises
    gray = cv2.rotate(gray, cv2.ROTATE_90_COUNTERCLOCKWISE)
    # Normalisation
    input_img = gray / 255.0
    input_img = input_img.reshape(1, 32, 32, 1)

    st.subheader("Image prétraitée")
    st.image(gray, clamp=True, width=150)

    # Prédiction
    if st.button("📷 Prédire"):
        prediction = model.predict(input_img)
        predicted_index = np.argmax(prediction)
        predicted_label = classes[predicted_index]

        st.success(f"Lettre prédite : **{predicted_label}**")

        # Afficher histogramme des probabilités
        fig, ax = plt.subplots(figsize=(10, 4))
        ax.bar(classes, prediction[0])
        ax.set_xticklabels(classes, rotation=45)
        st.pyplot(fig)
#python -m streamlit run C:\Users\marwa\PycharmProjects\JupyterProject7\app2.py