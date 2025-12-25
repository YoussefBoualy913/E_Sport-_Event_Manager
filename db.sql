
-- crée table Club
CREATE TABLE Club (
Club_id INT PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(30) NOT NULL,
ville VARCHAR(20) NOT NULL,
created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
-- crée table Equipe
CREATE TABLE Equipe (
Equipe_id INT PRIMARY KEY AUTO_INCREMENT,
Club_id INT  NOT NULL,   
Nom VARCHAR(20) NOT NULL,
Jeu VARCHAR(30) NOT NULL,
FOREIGN KEY (Club_id) REFERENCES Equipe(Club_id) ON DELETE CASCADE
);
-- crée table Joueur
CREATE TABLE Joueur (
Joueur_id INT PRIMARY KEY AUTO_INCREMENT,
Equipe_id INT  NOT NULL,   
Pseudo VARCHAR(20) NOT NULL,
Rôle VARCHAR(30) NOT NULL,
Salaire INT  NOT NULL, 
FOREIGN KEY (Equipe_id) REFERENCES Equipe(Equipe_id) ON DELETE CASCADE
);
-- crée table Tournoi
CREATE TABLE Tournoi (
Tournoi_id INT PRIMARY KEY AUTO_INCREMENT,  
Titre VARCHAR(20) NOT NULL,
Cashprize VARCHAR(30) NOT NULL,
Format VARCHAR(30) NOT NULL, 
Date DATETIME not null
);
-- crée table Sponsor
CREATE TABLE Sponsor ( 
Sponsor_id  INT PRIMARY KEY AUTO_INCREMENT,  
Tournoi_id int not null,  
Nom VARCHAR(20) NOT NULL,
Contribution VARCHAR(30) NOT NULL,
Financière VARCHAR(30) NOT NULL
);

-- crée table Matche
CREATE TABLE Matche ( 
match_id  INT PRIMARY KEY AUTO_INCREMENT,  
EquipeA_id int not null, 
EquipeB_id int not null,
Tournoi_id int not null,
Gagnant_id int not null,
Nom VARCHAR(20) NOT NULL,
Score_A int not null,
Score_B int not null,
FOREIGN KEY (EquipeA_id) REFERENCES Equipe(Equipe_id) ON DELETE CASCADE,
FOREIGN KEY (EquipeB_id) REFERENCES Equipe(Equipe_id) ON DELETE CASCADE,
FOREIGN KEY (Tournoi_id) REFERENCES Tournoi(Tournoi_id) ON DELETE CASCADE
);
