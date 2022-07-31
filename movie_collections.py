# Filename: movie_collections.py
# Purpose:  To keep track of all the movies on the site at the video streaming shop
# Author:   N McCarthy
# Class:    K Senek DT200
# Created:  09/05/2022
# ------------------------------------------------------------------------------------------------------------------------

#Lists and dictionaries
movies = [['Grease', 'Randal Kleiser', 110], ['Pulp Fiction', 'Quentin Tarantino', 154],['The Ring', 'Gore Verbinski', 115],['Mamma Mia', 'Phyllida Lloyd', 109]]
movie_times = {"Grease":110, "Pulp Fiction":154, "The Ring":115, "Mamma Mia":109}

#Global variables
cont = ""
add_title = ""

#Funtions
"""This function asks the user for input information of the movie they want to add then creates a new list holding this information.
This list is them put into the multidimensional list of 'movies' """
def action_a():
    global add_title
    add_title = "" #Global variable
    print("\n") #Blank line to space everything out nicely
    add_title = input("What is the title of the movie you would like to add? ").title() #Appends the input and make them automatically capital
    print("\n")
    add_director = input("What is the director of the movie you would like to add? ").title()
    print("\n")
    add_length = input("What is the length of the movie you would like to add in minutes? ")
    while len(add_length) < 1 or \
          not all(x.isnumeric() for x in add_length) or int(add_length) > 190 or int(add_length) < 20: #Movies just over 3 hours are not to rare nut movies about 4 hours are rare
        add_length = input("Please enter an integer between 20 and 132 minutes? EG: 100 or 90. ") #20 minutes tends to be the average length of a short film
    print("\n")
    new_info = [add_title, add_director, add_length] #Puts all information gathered into a list
    movies.append(new_info)#Adds a new list to the multidimensional movies list.
    movie_times[add_title] = add_length #Adds new info to the dictionary
    print("This movie and its information is now added to the list of movies on site. ")

"""This function allows the user to change the length of a movie by getting the dictionary key from input"""
def action_e():
    print("\n")
    changed_m_length = input("What is the exact title of the movie you would like to change the length of? ").title() #This will become the key for the dictionary
    print("\n")
    while changed_m_length not in movie_times:
        changed_m_length = input("Sorry that movie is not on our system, please try another one. PS: You cannot change the length of a movie you just entered. ").title()
        print("\n")
    change_length = input("What is the new length you want to change the movie to? ").title() #VALIDATION can add string and large number atm
    while len(change_length) < 1 or \
          not all(x.isnumeric() for x in change_length) or int(change_length) > 190 or int(change_length) < 20:
        change_length = input("Please enter an integer between 20 and 132 minutes? EG: 100 or 90. ")
    movie_times[changed_m_length] = change_length
    print("\n")
    print("The length of", changed_m_length,"is now", change_length, "minutes.")

    #Updates the multidimensional list with the new information
    remove_length = changed_m_length
    if remove_length == 'Grease':
        movies[0].remove(2) #Removes the length value
        movies[0].append(change_length) #Addes in the new length value
       
    elif remove_length == 'Pulp Fiction':
        movies[1].remove(2)
        movies[1].append(change_length)
               
    elif remove_length == 'The Ring':
        movies[2].remove(2)
        movies[2].append(change_length)
               
    elif remove_length == 'Mamma Mia':
        movies[3].remove(2)
        movies[3].append(change_length)

    #FIX THIS THEN DONE!! #add_title is the new input entered by user
    elif remove_length == add_title:
        a = len(movies)
        movies[a].remove(2)
        movies[a].append(change_length)

"""This program will use the input of the user as a key to access the movie dictionary and then print out the length of the chosen movie"""
def action_l():
    print("\n")
    key_title = input("What is the exact title of the movie you want to see the length of? ").title() #Key to print out length
    while key_title not in movie_times:
        print("Sorry, that movie is not on our system, please try another one. ")
        key_title = input("What is the exact title of the movie you want to see the length of? ").title()
    print("\n")
    print("The length of the movie you entered is", movie_times[key_title], "minutes.") #Access the dictionary using the key which is inputed

"""This function prints out the most recent and modified multidimensional list holding the movies and the information on them"""
def action_p():
    print("\n")
    print("These are the movie we currenlty have: ")
    for i in range(len(movies)) :
        for j in range(len(movies[i])) : #Prints out the most updated mulidimental list is a formate easier to read
            print(movies[i][j], end=" ")
        print()

#Program starts
print("--------------------------------＼ʕ •ᴥ•ʔ／--------------------------------")
print("                Welcome to my movie collection program!                  ") #Prints cute banner to welcome user
print("--------------------------------((ฅ)　(ฅ))--------------------------------")
   
while cont != "Q":
    action = input("""
[A] Add a movie
[E] Edit the length of a movie
[L] Print the length of a movie
[P] Print out all movie titles with their director and lengths
[Q] Quit
 
What action would you like to take? """).upper()

    if action == "A":
        action_a()

    elif action == "E":
        action_e()

    elif action == "L":
        action_l()

    elif action == "P":
        action_p()    

    elif action == "Q":
        cont = "Q" #Ends while loop
        continue

print("")
print("--------------------------------＼ʕ •ᴥ•ʔ／--------------------------------")
print("  Thank you for using my movie collection program and have a great day!  ") #Prints cute banner and program ends
print("--------------------------------((ฅ)　(ฅ))--------------------------------")
