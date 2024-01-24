# (DE) Symfony-Projekt - Maarten

Dies ist der Backend/Symfony-Teil des Projekts, um eine Liste von Autos anzuzeigen, wobei es möglich ist, Autos zur Liste hinzuzufügen und zu löschen. 
Das Projekt besteht insgesamt aus 3 Teilen:
- Angular für die Frontend-Nutzung
- Symfony für die Backend-API (aktuelles Repository)
- MySQL für die Datenbank
Diese README-Datei soll Anweisungen geben, wie man das Projekt startet und ausführt.
Ein Entwurf der Projektplanung findet sich hier: https://lucid.app/lucidchart/35d14b52-6362-4db4-8dd6-9c73aa4283b0/edit?viewport_loc=61%2C-30%2C1837%2C1053%2C0_0&invitationId=inv_3f726896-7d79-4626-aaf5-91105ddf821f

## Inhaltsverzeichnis

- [Installation](#installation)
- [Benutzung](#benutzung)

## Installation

### Voraussetzungen

- Node.js und npm (für Angular Frontend)
- Composer (für Symfony Backend)
- XAMPP (für MySQL-Datenbank)

### Einrichtung

1. Entferntes Repository klonen oder aus der gesendeten .zip-Datei öffnen. Remote-Repository: `https://github.com/MaartenLagerweij/symfony_project-bn.git`
2. Zum Backend-Ordner navigieren: `cd symfony_project`.
3. Erforderliche Composer-Abhängigkeiten installieren: `composer install`.
4. Den Symfony-Server starten: `symfony server:start`.
5. Wenn der Server läuft, sollte das Frontend in der Lage sein, POST-Anfragen an `http://127.0.0.1:8000/api/login` und GET-Anfragen an `http://127.0.0.1:8000/api/products` zu senden.

## Benutzung

Nachdem sowohl das Frontend, das Backend und XAMPP (mit korrekter Datenbank) laufen, die Anwendung starten, indem man zur Login-Seite unter `http://localhost:4200/login` geht. Mit den gegebenen Anmeldeinformationen einloggen. Liste der Produkte, die aus der Datenbank abgerufen wird, anzeigen. Bei Bedarf Produkte hinzufügen.


# (EN) Symfony project - Maarten

This is the backend/Symfony part of the project to display a list of cars, where it is possible to add and delete cars to the list. 
The projects consists in total of 3 part:
- Angular for Frontend use
- Symfony for the backend API (current repository)
- MySQL for the database
This READ.me file is meant to give instruction on how to start up and run the project.
A skatch of the planning of the project can be found here: https://lucid.app/lucidchart/35d14b52-6362-4db4-8dd6-9c73aa4283b0/edit?viewport_loc=170%2C461%2C1837%2C1053%2C0_0&invitationId=inv_3f726896-7d79-4626-aaf5-91105ddf821f

## Table of Contents

- [Installation](#installation)
- [Usage](#usage)

## Installation

### Requirements

- Node.js and npm (for Angular Frontend)
- Composer (for Symfony Backend)
- XAMPP (for MySQL database)

### Setup

1. Clone remote repository or open it from the send .zip file. Remote repository: https://github.com/MaartenLagerweij/symfony_project-bn.git
2. Navigate to the backend folder: `cd symfony_project`.
3. Install required Composer dependencies: `composer install`.
4. Start the Symfony server: `symfony server:start`.
5. When server is running, the frontend should be able to make POST requests to http://127.0.0.1:8000/api/login and GET requests to http://127.0.0.1:8000/api/products

## Usage

After both frontend, backend and XAMPP (with correct database) are running, start the application by going to the login page on http://localhost:4200/login. Sign in with given credentials. See list of products that is fetched from the database. Add products if necessary.

