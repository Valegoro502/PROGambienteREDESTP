import os
import glob

folder = r"c:\Users\valen\OneDrive\Desktop\Programacion-En-Redes-main\ejercicios_javascript"
for file in glob.glob(os.path.join(folder, "*.html")):
    if os.path.basename(file) == "index.html" or os.path.basename(file) == "procesar.html":
        continue
    with open(file, 'r', encoding='utf-8') as f:
        content = f.read()
    
    new_content = content.replace('href="index.html"', 'href="../index.html"')
    
    with open(file, 'w', encoding='utf-8') as f:
        f.write(new_content)
    print(f"Updated {file}")
