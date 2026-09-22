import os
import glob

folder = r"c:\Users\valen\OneDrive\Desktop\Programacion-En-Redes-main\ejercicios_javascript\especiales"
for file in glob.glob(os.path.join(folder, "*.html")):
    with open(file, 'r', encoding='utf-8') as f:
        content = f.read()
    try:
        # Convert the mistakenly saved double-utf8 back to bytes then string
        fixed_content = content.encode('windows-1252').decode('utf-8')
        with open(file, 'w', encoding='utf-8') as f:
            f.write(fixed_content)
        print(f"Fixed {file}")
    except Exception as e:
        print(f"Error fixing {file}: {e}")
