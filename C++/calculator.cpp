#include <stdio.h>

int main() {

  char operation;
  double x, y;
  printf("Select which operation you would like to perform;\n'+' -> addition\n'-' -> subtraction\n'*' -> multiplication\n'/' -> division\nSelection: ");
  scanf("%c", &operation);
  printf("Enter the first number: ");
  scanf("%lf", &x);
  printf("Enter the second number: ");
  scanf("%lf", &y);

  switch (operation) {
    case '+':
      printf("%.1lf + %.1lf = %.1lf", x, y, x + y);
      break;
    case '-':
      printf("%.1lf - %.1lf = %.1lf", x, y, x - y);
      break;
    case '*':
      printf("%.1lf * %.1lf = %.1lf", x, y, x * y);
      break;
    case '/':
      printf("%.1lf / %.1lf = %.1lf", x, y, x / y);
      break;
    default:
      printf("You have not entered a valid operator. Please run the program again.");
  }

  return 0;
}
