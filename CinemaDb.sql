USE CinemaDb

CREATE TABLE UserInfo(
	UserId UniqueIdentifier NOT NULL PRIMARY KEY,
	FullName VARCHAR(255) NOT NULL,
	PhoneNumber VARCHAR(255) NOT NULL,
	Email VARCHAR(255) NOT NULL,
	Password VARCHAR(255) NOT NULL
)

CREATE TABLE Ticket(
	UserId UniqueIdentifier NOT NULL,
	TicketName VARCHAR(255) NOT NULL,
	TicketPrice INT NOT NULL,
	TicketDate DATE NOT NULL,
	CONSTRAINT UserId FOREIGN KEY(UserId) REFERENCES UserInfo(UserId)
)


SET IDENTITY_INSERT UserInfo ON 

EXEC sp_help UserInfo

EXEC sp_help Ticket

INSERT INTO UserInfo(UserId, FullName, PhoneNumber, Email, Password) 
VALUES
	(NEWID(), 'Kadmiel', 'kadmiel@gmail.com', '089612344321', 'password1'),
	(NEWID(), 'Agung', 'agung@gmail.com', '089656788765', 'password2'),
	(NEWID(), 'Seemore', 'seemore@gmail.com', '089678900987', 'password3')

SELECT* FROM UserInfo

SELECT* FROM Ticket




DROP TABLE UserInfo
DROP TABLE Ticket
