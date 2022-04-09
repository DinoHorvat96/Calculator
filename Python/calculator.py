def calculation():
    operation = input('''
Select which operation you would like to perform:
"+" -> addition
"-" -> subtraction
"*" -> multiplication
"/" -> division
Selection: ''')

    x = int(input('Please enter the first number: '))
    y = int(input('Please enter the second number: '))

    if operation == '+':
        print('{} + {} = '.format(x, y))
        print(x + y)

    elif operation == '-':
        print('{} - {} = '.format(x, y))
        print(x - y)

    elif operation == '*':
        print('{} * {} = '.format(x, y))
        print(x * y)

    elif operation == '/':
        print('{} / {} = '.format(x, y))
        print(x / y)

    else:
        print('You have not typed a valid operator, please run the program again.')

    repeat()

def repeat():
    calc_again = input('''
Do you want perform another calculation?
Type "Y" for YES or "N" for NO.
Y/N: ''')

    if calc_again.upper() == 'Y':
        calculation()
    elif calc_again.upper() == 'N':
        print('Closing the program...')
    else:
        repeat()

calculation()