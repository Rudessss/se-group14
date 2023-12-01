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

CREATE TABLE TicketInfo(
	UserId UniqueIdentifier NOT NULL,
	TicketName VARCHAR(255) NOT NULL,
	TicketPrice INT NOT NULL,
	TicketDate DATE NOT NULL,
	CONSTRAINT UserId FOREIGN KEY(UserId) REFERENCES UserInfo(UserId)
)

SET IDENTITY_INSERT UserInfo ON 

/* Check Table */
EXEC sp_help UserInfo

EXEC sp_help TicketInfo


/* Insert Data */
INSERT INTO UserInfo(UserId, FullName, PhoneNumber, Email, Password) 
VALUES
	(NEWID(), 'Kadmiel', '089612344321', 'kadmiel@gmail.com', 'password1'),
	(NEWID(), 'Agung', '089656788765', 'agung@gmail.com', 'password2'),
	(NEWID(), 'Seemore', '089678900987', 'seemore@gmail.com', 'password3')


/* Select Data */
SELECT* FROM UserInfo

SELECT* FROM TicketInfo




/* FOR DELETE THE TABLE */
DROP TABLE UserInfo
DROP TABLE TicketInfo
/* FOR DELETE THE TABLE */
