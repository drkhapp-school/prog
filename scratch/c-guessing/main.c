#include <stdio.h>
#include <string.h>
#include <time.h>
#include <stdlib.h>
#include <ctype.h>

#define true 1
#define false 0

int main() {
  short valid;
  int min;
  int max;
  int myst;
  int limit;
  int essaie;
  srand(time(NULL));   

  min = 0;
  max = 100;
  myst = rand() % 101; 
  limit = 1;
  essaie = 0;

  printf("------------\n");
  printf("Trouver un nombre entre 1 et 99.\n");
  printf("Vous avez 5 essaies.\n");
  printf("------------\n");

  while (limit <= 5 && essaie != myst) {
    valid = false;

    while (valid == false) {
      char input[100] = "";
      int length, i;

      printf("(%d/5) %d < ? < %d : ", limit, min, max);
      scanf("%s", input);
      
      valid = true;
      length = strlen (input);
      for (i = 0; i < length; i++) {
        if (!isdigit(input[i])) {
          valid = false;
          break;
        }
      }

      if (valid == true) {
        essaie = atoi(input);
      }
    } 

    if (essaie < myst)
      min = essaie;
    else if (essaie > myst)
      max = essaie;

    limit++;
  }

  printf("\n------------\n");

  if (essaie == myst)
    printf("Féliciation! le nombre était: %d\n", myst);
  else
    printf("Désolé! Le nombre était: %d\n", myst);

	return 0;
}
