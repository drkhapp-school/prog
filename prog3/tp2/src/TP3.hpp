/**
 * @file TP3.hpp
 * @brief Classeur de dossier et de fichiers.
 * @author 1927230 - Jean-Philippe
 * @version 1.0.0
 * @date 2021-11-25
 */
#include "BSTree.hpp"
#include "Queue.hpp"
#include "Stack.hpp"
//#include "AVLTree"
#include "Folder.hpp"
#include "Window.hpp"

using namespace std;

inline Stack<Folder *> *path;
// AVLTree<int>* selections;

/**
 * @brief Obtention du centre d'un ic�ne selon le texte envoy�e.
 *
 * @param index L'indice de l'ic�ne
 * @param name Le texte que l'on veut centrer
 *
 * @return Position du texte, en pixels, sur l'axe des x
 */
inline int centerText(int index, string name) {
  return (((Window::getIconWidth() - Window::getStringWidth(name)) / 2) +
          index);
}

inline void drawItem(Icon icon, string name, int x, int y,
                     bool selected = false) {
  if (Window::getStringWidth(name) >= Window::getIconWidth()) {
    name.resize(14);
    name.replace(name.end(), name.end() - 3, "...");
  }
  Window::drawIcon(icon, x, y, selected);
  Window::drawString(name, centerText(x, name),
                     y + (Window::getIconHeight() * 0.75));
}

/**
 * @brief Obtention de l'indice de l'�l�ment click�
 *
 * @param x Position de la souris, en pixels, sur l'axe des x
 * @param y Position de la souris, en pixels, sur l'axe des y
 * @return Indice de l'�l�ment
 */
inline int getIndex(const int &x, const int &y) {
  // TODO : Retourner l'indice de l'�l�ment click�
  int columns = Window::getWidth() / Window::getIconWidth();

  return (x / Window::getIconWidth() + (y / Window::getIconHeight() * columns));
}

/**
 * @brief Automatiquement appel�e lorsque la fen�tre s'ouvre
 */
inline void onInit() {
  // TODO : Initialisations
  Folder *root = new Folder("/");
  path = new Stack<Folder *>();
  path->push(root);
  root->createFolder(new Folder("hiii"));
  root->createFolder(new Folder("epic files"));
  root->createFolder(new Folder("fucking long ass name like what the fuck"));
  root->createNote(new Note("cute note"));
  root->createNote(new Note("ok note"));
  root->createNote(new Note("secret note"));
  root->createNote(new Note("interesting note"));
  root->createNote(new Note("meh note"));
  root->createNote(new Note("ugly note"));
  root->createNote(new Note("a note"));
  root->createNote(new Note("note"));
  root->createNote(new Note("?? note"));
  root->createNote(new Note("note..."));
  root->createNote(new Note("note! >.<"));
  root->createNote(new Note("extremelylongnamebecauseitisabsolutegarbage"));
}

/**
 * @brief Automatiquement appel�e environ 60 fois par seconde
 */
inline void onRefresh() {
  // TODO : Afficher le contenu du dossier actuel
  // Get the current folder's contents
  vector<Folder *> folders = path->top()->getFolders();
  vector<Note *> notes = path->top()->getNotes();
  int x = 0;
  int y = 0;

  // Root folder
  folders.insert(folders.begin(), new Folder(".."));

  // All folders
  for (Folder *item : folders) {
    if (x + Window::getIconWidth() > Window::getWidth()) {
      y += Window::getIconHeight();
      x = 0;
    }
    drawItem(Icon::FOLDER, item->getName(), x, y);
    x += Window::getIconWidth();
  }

  // All notes
  for (Note *item : notes) {
    if (x + Window::getIconWidth() > Window::getWidth()) {
      y += Window::getIconHeight();
      x = 0;
    }
    drawItem(Icon::NOTE, item->getName(), x, y);
    x += Window::getIconWidth();
  }
}

/**
 * @brief Automatiquement appel�e lors d'un click de souris dans la fen�tre
 *
 * @param x Position, en pixels, sur l'axe des x
 * @param y Position, en pixels, sur l'axe des y
 * @param button Bouton click� 
 * @param ctrl Si la touche "Ctrl" est enfonc�e
 */
inline void onWindowClick(const int &x, const int &y, const bool &button,
                          const bool &ctrl) {
  if (button) {
    // TODO : Click sur un dossier ou une note du dossier actuel
    int index = getIndex(x, y);
  } else {
    // TODO : Afficher le menu
    Window::showMenu(x, y, Menu::NEW_FOLDER | Menu::NEW_NOTE);
  }
}

/**
 * @brief Automatiquement appel�e lors d'un click de souris dans le menu 
 * contextuel
 * @param menu �l�ment de menu click�
 *
 */
inline void onMenuClick(const unsigned int &menuItem) {
  switch (menuItem) {
  case Menu::NEW_FOLDER: {
    // TODO : Cr�er un nouveau dossier dans le dossier actuel
    string name = Window::showTextField();
    path->top()->createFolder(new Folder(name));
    break;
  }
  case Menu::NEW_NOTE: {
    string name = Window::showTextField();
    path->top()->createNote(new Note(name));
    break;
  }
  case Menu::RENAME:
    // TODO : Renommer le dossier ou la note
    break;

  case Menu::DELETE:
    // TODO : Supprimer le ou les dossiers, et tout ce qu'ils contiennent, et
    // les notes s�lectionn�s
    break;

  case Menu::ENCODE:
    // TODO : Encoder la note avec la m�thode de Huffman
    break;

  case Menu::DECODE:
    // TODO : D�coder la note avec la m�thode de Huffman
    break;

  case Menu::SELECT_ALL:
    // TODO : S�lectionner tous les dossiers et notes du dossier actuel
    break;
  }
}

/**
 * @brief Automatiquement appel�e lorsque la fen�tre se ferme
 */
inline void onQuit() {
  // TODO : Lib�rations
}
