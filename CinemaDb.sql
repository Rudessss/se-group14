/* Use Database */
USE CinemaDb


/* Create Table */
CREATE TABLE UserInfo(
	UserId UniqueIdentifier NOT NULL PRIMARY KEY,
	FullName VARCHAR(255) NOT NULL,
	PhoneNumber VARCHAR(255) NOT NULL,
	Email VARCHAR(255) NOT NULL,
	Password VARCHAR(255) NOT NULL
)

CREATE TABLE FilmInfo(
	FilmId CHAR(5) NOT NULL,
	FilmName VARCHAR(255) NOT NULL,
	FilmDirector VARCHAR(255) NOT NULL,
	FilmProducer VARCHAR(255) NOT NULL,
	FilmStarring VARCHAR(255) NOT NULL,
	FilmDescription VARCHAR(900) NOT NULL
)

CREATE TABLE TicketInfo(
	UserId UniqueIdentifier NOT NULL,
	FilmName VARCHAR(255) NOT NULL,
	TicketPrice INT NOT NULL,
	TicketDate DATE NOT NULL,
	CONSTRAINT UserId FOREIGN KEY(UserId) REFERENCES UserInfo(UserId),
	CONSTRAINT FilmName FOREIGN KEY(FilmName) REFERENCES FilmInfo(FilmName)
)


SET IDENTITY_INSERT UserInfo ON 


/* Check Table */
EXEC sp_help UserInfo

EXEC sp_help FilmInfo

EXEC sp_help TicketInfo



/* Insert Data */
INSERT INTO UserInfo(UserId, FullName, PhoneNumber, Email, Password) 
VALUES
	(NEWID(), 'Kadmiel', '089612344321', 'kadmiel@gmail.com', 'password1'),
	(NEWID(), 'Agung', '089656788765', 'agung@gmail.com', 'password2'),
	(NEWID(), 'Seemore', '089678900987', 'seemore@gmail.com', 'password3')


INSERT INTO FilmInfo(FilmId, FilmName, FilmDirector, FilmProducer, FilmStarring, FilmDescription) 
VALUES
	('FI001', 'Ant-Man and the Wasp: Quantumania', 'Peyton Reed', 'Kevin Feige, Stephen Broussard', 'Paul Rudd, 
Evangeline Lilly, Michael Douglas, Michelle Pfeiffer, Jonathan Majors', 'In the film, which officially kicks off phase 5 of the Marvel Cinematic Universe, Super-Hero partners Scott Lang (Paul Rudd) and Hope Van Dyne (Evangeline Lilly) return to continue their adventures as Ant-Man and the Wasp. Together, with Hope’s parents Hank Pym (Michael Douglas) and Janet Van Dyne (Michelle Pfeiffer), the family finds themselves exploring the Quantum Realm, interacting with strange new creatures and embarking on an adventure that will push them beyond the limits of what they thought was possible. Jonathan Majors joins the adventure as Kang.
'),
	('FI002', 'Captain Marvel', 'Anna Boden, Ryan Fleck', 'Kevin Feige', 'Brie Larson, Samuel L. Jackson, Ben Mendelsohn, 
Djimon Hounsou, Lee Pace, Lashana Lynch, Gemma Chan, Annette Bening, Clark Gregg , Jude Law', 'After crashing an experimental aircraft, Air Force pilot Carol Danvers is discovered by the Kree and trained as a member of the elite Starforce Military under the command of her mentor Yon-Rogg. Six years later, after escaping to Earth while under attack by the Skrulls, Danvers begins to discover there is more to her past. With help from S.H.I.E.L.D. agent Nick Fury, they set out to unravel the truth.
'),
	('FI003', 'Fast X', 'Louis Leterrier', 'Neal H. Moritz, Vin Diesel, Justin Lin, Jeff Kirschenbaum, Samantha Vincent', 
'Vin Diesel', 'The final road begins! Dom Torretto and his family have made it through thick and thin together while succeeding in various missions and fighting off multiple villains. But now Dom is put to the ultimate test when he goes up against Dante Reyes, the son of an old foe who is out to exact revenge for the death of his father. With time running out and help from new allies, Dom and his family are in for the fight of their lives against the biggest enemy they have ever faced.
'),
	('FI004', 'Oppenheimer', 'Christopher Nolan', 'Emma Thomas, Charles Roven, Christopher Nolan', 'Cillian Murphy, Emily Blunt,
Matt Damon, Robert Downey Jr., Florence Pugh, Josh Hartnett, Casey Affleck, Rami Malek, Kenneth Branagh', 'J. Robert Oppenheimer, U.S. theoretical physicist. He graduated from Harvard University, did research at Cambridge University, and earned a doctorate from Göttingen University. He returned to the U.S. to teach at the California Institute of Technology (1929–47). His research focused on energy processes of subatomic particles, and he trained a generation of American physicists. In World War II he was named director of the army’s atomic-bomb project, later known as the Manhattan Project, and set up the laboratory in Los Alamos, N.M., that remains a principal weapons-research laboratory.
'),
	('FI005', 'Transformers: Rise of the Beasts', 'Steven Caple Jr.', 'Don Murphy, Tom DeSanto, Lorenzo di Bonaventura, 
Michael Bay, Mark Vahradian, Duncan Henderson', 'Anthony Ramos, Dominique Fishback', 'Returning to the action and spectacle that have captured moviegoers around the world, Transformers: Rise of the Beasts will take audiences on a 90s globetrotting adventure with the Autobots and introduce a whole new faction of Transformers - the Maximals - to join them as allies in the existing battle for earth. Directed by Steven Caple Jr. and starring Anthony Ramos and Dominique Fishback.
'),
	('FI006', 'Mission: Impossible - Dead Reckoning Part One', 'Christopher McQuarrie', 'Tom Cruise, Christopher McQuarrie', 'Tom Cruise, Hayley Atwell, 
Ving Rhames, Simon Pegg, Rebecca Ferguson, Vanessa Kirby, Esai Morales, Pom Klementieff, Mariela Garriga, Henry Czerny', 'Ethan Hunt and the IMF team must track down a terrifying new weapon that threatens all of humanity if it falls into the wrong hands. With control of the future and the fate of the world at stake, a deadly race around the globe begins. Confronted by a mysterious, all-powerful enemy, Ethan is forced to consider that nothing can matter more than the mission -- not even the lives of those he cares about most.
'),
	('FI007', 'John Wick: Chapter 4', 'Chad Stahelski', 'Basil Iwanyk, Erica Lee, Chad Stahelski', 'Keanu Reeves, Laurence Fishburne, George Georgiou', 'John Wick uncovers a path to defeating The High Table. But before he can earn his freedom, Wick must face off against a new enemy with powerful alliances across the globe and forces that turn old friends into foes.')


/* Select Data */
SELECT* FROM UserInfo

SELECT* FROM FilmInfo

SELECT* FROM TicketInfo




/* FOR DELETE THE TABLE */
DROP TABLE UserInfo
DROP TABLE FilmInfo
DROP TABLE TicketInfo
/* FOR DELETE THE TABLE */
