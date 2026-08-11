# 🌱 Smart Agriculture IoT — Alpha

## 📌 Description

Ce projet est une plateforme IoT dédiée à la surveillance et à l'automatisation d'un système d'agriculture intelligente.

L'objectif est de collecter les données provenant de capteurs, de les transmettre via Internet, de les enregistrer dans une base de données et de permettre leur visualisation à travers une interface web.

Le projet combine le **génie électrique, l'automatique, l'électronique, les systèmes embarqués et l'Internet des objets (IoT)**.

---

## ⚙️ Fonctionnalités

- 🌡️ Acquisition des données des capteurs
- 💧 Surveillance de l'humidité du sol
- 🌱 Gestion automatisée de l'irrigation
- 🚰 Commande d'une pompe
- 📡 Transmission des données via Wi-Fi
- 🌐 Communication entre l'ESP32 et le serveur
- 📊 Visualisation des données sur une interface web
- 🗄️ Enregistrement des données dans une base de données
- 🔌 Communication avec une API
- 🐳 Déploiement avec Docker

---

## 🛠️ Technologies utilisées

- **PHP 8.2**
- **Apache**
- **MySQL / MariaDB**
- **PHP MySQLi**
- **HTML / CSS / JavaScript**
- **ESP32**
- **Wi-Fi / HTTP**
- **API**
- **Docker**
- **IoT**
- **Systèmes embarqués**

---

## 📁 Structure du projet

```text
Alpha/
│
├── api/
│   └── API du système
│
├── Dockerfile
│   └── Configuration Docker avec PHP 8.2 et Apache
│
├── db.php
│   └── Connexion à la base de données MySQL
│
├── index.php
│   └── Interface principale de l'application
│
└── README.md
    └── Documentation du projet
---
┌──────────────────┐
│     Capteurs     │
│ Température      │
│ Humidité air     │
│ Humidité sol     │
└────────┬─────────┘
         │
         ▼
┌──────────────────┐
│      ESP32       │
│ Acquisition &    │
│ commande         │
└────────┬─────────┘
         │
         │ Wi-Fi / HTTP
         ▼
┌──────────────────┐
│     API PHP      │
│ Communication    │
└────────┬─────────┘
         │
         ▼
┌──────────────────┐
│  Base de données │
│      MySQL       │
└────────┬─────────┘
         │
         ▼
┌──────────────────┐
│ Interface Web    │
│  Supervision     │
└──────────────────┘
---
## 🎯 Objectifs du projet
Le projet vise principalement à :
Automatiser l'irrigation selon l'état du sol.
Surveiller les paramètres environnementaux.
Transmettre les données à distance.
Stocker l'historique des mesures.
Permettre la supervision à travers une interface web.
Mettre en pratique les technologies IoT et les systèmes embarqués.
🚀 Évolution du projet
Le système peut être amélioré par l'ajout de :
📱 Une application mobile
📈 Des graphiques avancés
🔔 Des notifications automatiques
☁️ Une plateforme cloud
🔐 Une authentification utilisateur renforcée
⚡ Une alimentation solaire
🤖 Des algorithmes d'automatisation plus avancés

## 👨‍💻 Auteur
Alpha Uwacowun
Electrical Engineering ⚡
Automation & Industrial Computing
Electronics • IoT • Renewable Energy
Je m'intéresse particulièrement aux systèmes électriques, à l'automatique, à l'électronique, aux systèmes embarqués, à l'IoT et aux technologies industrielles.
📧 Email
🐦 X — Alpha Uwacowun⁠�
🌍 Wikimedia — Alpha Uwacowun⁠�


##📚 Contexte académique
Ce projet s'inscrit dans le domaine du génie électrique et met en application des connaissances en :
Automatique
Électronique
Informatique industrielle
Systèmes embarqués
IoT
Installations électriques
Énergies renouvelables


📄 Licence
Ce projet est destiné à des fins éducatives, expérimentales et professionnelles.
