<?php

function getMenuStaticData($lang) {
    switch($lang) {
        case "pt":
            return array(
                "titleMenu" => "Globalização",
                "homeMenu" => "Início",
                "aboutMenu" => "Sobre",
                "mapMenu" => "Mapa de Acessos",
                "referencesMenu" => "Referências",
                "contactMenu" => "Contato",
                "languageMenu" => "Idioma"
            );
        case "en":
            return array(
                "titleMenu" => "Globalization",
                "homeMenu" => "Home",
                "aboutMenu" => "About",
                "mapMenu" => "Access Map",
                "referencesMenu" => "References",
                "contactMenu" => "Contact",
                "languageMenu" => "Language"
            );
        case "es":
            return array(
                "titleMenu" => "Globalización",
                "homeMenu" => "Primero",
                "aboutMenu" => "Sobre",
                "mapMenu" => "Mapa de Accesos",
                "referencesMenu" => "Referencias",
                "contactMenu" => "Contacto",
                "languageMenu" => "Idioma"
            );
        case "fr":
            return array(
                "titleMenu" => "Globalisation",
                "homeMenu" => "Premier",
                "aboutMenu" => "Propos",
                "mapMenu" => "Plan d'accès",
                "referencesMenu" => "Références",
                "contactMenu" => "Contacter",
                "languageMenu" => "Langue"
            );
        case "it":
            return array(
                "titleMenu" => "Globalizzazione",
                "homeMenu" => "Prima",
                "aboutMenu" => "Informazioni",
                "mapMenu" => "Mappa di Accesso",
                "referencesMenu" => "Riferimenti",
                "contactMenu" => "Contattaci",
                "languageMenu" => "Lingua"
            );
        case "ge":
            return array(
                "titleMenu" => "Globalisierung",
                "homeMenu" => "Nach hause",
                "aboutMenu" => "Über",
                "mapMenu" => "Zugangskarte",
                "referencesMenu" => "Referenzen",
                "contactMenu" => "Kontakt",
                "languageMenu" => "Sprache"
            );
        default:
            return array(
                "titleMenu" => "Globalização",
                "homeMenu" => "Início",
                "aboutMenu" => "Sobre",
                "mapMenu" => "Mapa de Acessos",
                "referencesMenu" => "Referências",
                "contactMenu" => "Contato",
                "languageMenu" => "Idioma"
            );
    }
}

function getHomeStaticData($lang) {
    switch($lang) {
        case "pt":
            return array(
                "title" => "Globalização",
                "subtitle1" => "Trabalho desenvolvido para a disciplina de Tecnologia e Sociedade",
                "subtitle2" => "Curso de Análise e Desenvolvimento de Sistemas",
                "subtitle3" => "IFRS Campus Bento Gonçalves"
            );
        case "en":
            return array(
                "title" => "Globalization",
                "subtitle1" => "Work developed for the discipline of Technology and Society",
                "subtitle2" => "Course on Analysis and Development of Systems",
                "subtitle3" => "IFRS Campus Bento Gonçalves"
            );
        case "es":
            return array(
                "title" => "Globalización",
                "subtitle1" => "Trabajo desarrollado para la disciplina de Tecnología y Sociedad",
                "subtitle2" => "Curso de Análisis y Desarrollo de Sistemas",
                "subtitle3" => "IFRS Campus Bento Gonçalves"
            );
        case "fr":
            return array(
                "title" => "Globalisation",
                "subtitle1" => "Travail développé pour la discipline de la technologie et de la société",
                "subtitle2" => "Cours sur l'analyse et le développement de systèmes",
                "subtitle3" => "IFRS Campus Bento Gonçalves"
            );
        case "it":
            return array(
                "title" => "Globalizzazione",
                "subtitle1" => "Lavoro sviluppato per la disciplina di Tecnologia e Società",
                "subtitle2" => "Corso di analisi e sviluppo di sistemi",
                "subtitle3" => "IFRS Campus Bento Gonçalves"
            );
        case "ge":
            return array(
                "title" => "Globalisierung",
                "subtitle1" => "Für die Disziplin Technik und Gesellschaft entwickelte Arbeit",
                "subtitle2" => "Kurs zu Analyse und Entwicklung von Systemen",
                "subtitle3" => "IFRS Campus Bento Gonçalves"
            );
        default:
            return array(
                "title" => "Globalização",
                "subtitle1" => "Trabalho desenvolvido para a disciplina de Tecnologia e Sociedade",
                "subtitle2" => "Curso de Análise e Desenvolvimento de Sistemas",
                "subtitle3" => "IFRS Campus Bento Gonçalves"
            );
    }
}

function getAboutStaticData($lang) {
    switch($lang) {
        case "pt":
            return array(
                "title" => "Sobre",
                "subtitle" => "Algumas informações sobre este projeto.",
                "text1" => "Este projeto consiste no trabalho final da disciplina de Tecnologia e Sociedade, do 6o semestre curso de Análise e Desenvolvimento de Sistemas, no IFRS Campus Bento Gonçalves.",
                "text2" => "O site visa resumir os conteúdos abordados sobre o tema Globalização visto durante as aulas."
            );
        case "en":
            return array(
                "title" => "About",
                "subtitle" => "Some information about this project.",
                "text1" => "This project consists of the final work of the discipline of Technology and Society of the 6th semester of Systems Analysis and Development, in the IFRS Campus Bento Gonçalves.",
                "text2" => "The site aims to summarize the contents covered on the topic Globalization seen during the lessons."
            );
        case "es":
            return array(
                "title" => "Sobre",
                "subtitle" => "Algunas informaciones sobre este proyecto.",
                "text1" => "Este proyecto consiste en el trabajo final de la disciplina de Tecnología y Sociedad, del 6º semestre curso de Análisis y Desarrollo de Sistemas, en el IFRS Campus Bento Gonçalves.",
                "text2" => "El sitio pretende resumir los contenidos abordados sobre el tema Globalización visto durante las clases.",
            );
        case "fr":
            return array(
                "title" => "Propos",
                "subtitle" => "Quelques informations sur ce projet.",
                "text1" => "Ce projet comprend les travaux finaux de la discipline Technologie et société du 6ème semestre d'analyse et de développement de systèmes, dans l'IFRS Campus Bento Gonçalves.",
                "text2" => "Le site vise à résumer le contenu couvert sur le sujet La mondialisation vue au cours des leçons.",
            );
        case "it":
            return array(
                "title" => "Informazioni",
                "subtitle" => "Alcune informazioni su questo progetto.",
                "text1" => "Questo progetto consiste nel lavoro finale della disciplina di Tecnologia e Società del sesto semestre di Analisi e sviluppo dei sistemi, nel Campus IFRS Bento Gonçalves.",
                "text2" => "Il sito intende riassumere i contenuti trattati sull'argomento Globalizzazione vista durante le lezioni.",
            );
        case "ge":
            return array(
                "title" => "Über",
                "subtitle" => "Einige Informationen zu diesem Projekt.",
                "text1" => "Dieses Projekt besteht aus der Abschlussarbeit der Disziplin Technik und Gesellschaft des 6. Semesters für Systemanalyse und Entwicklung im IFRS Campus Bento Gonçalves.",
                "text2" => "Die Website soll die Inhalte zum Thema Globalisierung während des Unterrichts zusammenfassen.",
            );
        default:
            return array(
                "title" => "Sobre",
                "subtitle" => "Algumas informações sobre este projeto.",
                "text1" => "Este projeto consiste no trabalho final da disciplina de Tecnologia e Sociedade, do 6o semestre curso de Análise e Desenvolvimento de Sistemas, no IFRS Campus Bento Gonçalves.",
                "text2" => "O site visa resumir os conteúdos abordados sobre o tema Globalização visto durante as aulas."
            );
    }
}

function getMapStaticData($lang) {
    switch($lang) {
        case "pt":
            return array(
                "title" => "Mapa de Acessos",
                "subtitle" => "Veja aqui quais países acessaram o site."
            );
        case "en":
            return array(
                "title" => "Access Map",
                "subtitle" => "See here which countries have accessed the site."
            );
        case "es":
            return array(
                "title" => "Mapa de Accesos",
                "subtitle" => "Ver aquí qué países accedieron al sitio."
            );
        case "fr":
            return array(
                "title" => "Plan d'accès",
                "subtitle" => "Voir ici quels pays ont accédé au site."
            );
        case "it":
            return array(
                "title" => "Mappa di Accesso",
                "subtitle" => "Vedi qui quali paesi hanno avuto accesso al sito."
            );
        case "ge":
            return array(
                "title" => "Zugangskarte",
                "subtitle" => "Hier erfahren Sie, welche Länder auf die Website zugegriffen haben."
            );
        default:
            return array(
                "title" => "Mapa de Acessos",
                "subtitle" => "Veja aqui quais países acessaram o site."
            );
    }
}

function getReferencesStaticData($lang) {
    switch($lang) {
        case "pt":
            return array(
                "title" => "Referências",
                "subtitle" => "Referências utilizadas ne neste projeto.",
                "theme" => "Tema: Clean Blog - Boostrap Blog Theme.",
                "map" => "Mapa: Dados obtidos via Google Analytics e mapa gerado via Google Charts.",
                "cms" => "Gerenciador de Conteúdos: desenvolvido utilzando o Framework PHP CodeIgniter.",
                "translate" => "Tradução: Google Tradutor."
            );
        case "en":
            return array(
                "title" => "References",
                "subtitle" => "References used in this project.",
                "theme" => "Theme: Clean Blog - Bootstrap Blog Theme.",
                "map" => "Map: Data obtained via Google Analytics and map generated via Google Charts.",
                "cms" => "Content Manager: developed using the CodeIgniter PHP Framework.",
                "translate" => "Translation: Google Translate."
            );
        case "es":
            return array(
                "title" => "Referencias",
                "subtitle" => "Referencias utilizadas en este proyecto.",
                "theme" => "Tema: Clean Blog - Bootstrap Blog Theme.",
                "map" => "Mapa: Datos obtenidos vía Google Analytics y mapa generado a través de Google Charts.",
                "cms" => "Gestor de Contenidos: desarrollado utilizando el Framework PHP CodeIgniter.",
                "translate" => "Traducción: Google Traductor."
            );
        case "fr":
            return array(
                "title" => "Références",
                "subtitle" => "Références utilisées dans ce projet.",
                "theme" => "Thème: Clean Blog - Boostrap Blog Theme.",
                "map" => "Carte: données obtenues via Google Analytics et carte générée via Google Charts.",
                "cms" => "Gestionnaire de contenu: développé à l'aide du framework PHP CodeIgniter.",
                "translate" => "Traduction: Google Translate."
            );
        case "it":
            return array(
                "title" => "Riferimenti",
                "subtitle" => "Riferimenti usati in questo progetto.",
                "theme" => "Tema: Clean Blog - Boostrap Blog Theme.",
                "map" => "Mappa: dati ottenuti tramite Google Analytics e mappe generate tramite Google Charts.",
                "cms" => "Content Manager: sviluppato utilizzando il Framework PHP CodeIgniter.",
                "translate" => "Traduzione: Google Translate."
            );
        case "ge":
            return array(
                "title" => "Referenzen",
                "subtitle" => "In diesem Projekt verwendete Referenzen.",
                "theme" => "Theme: Clean Blog - Bootstrap Blog Theme.",
                "map" => "Karte: Daten, die über Google Analytics abgerufen werden, und Karte, die über Google Charts erstellt wurde.",
                "cms" => "Content Manager: Entwickelt mit dem CodeIgniter PHP Framework.",
                "translate" => "Übersetzung: Google Translate."
            );
        default:
            return array(
                "title" => "Referências",
                "subtitle" => "Referências utilizadas ne neste projeto.",
                "theme" => "Tema: Clean Blog - Boostrap Blog Theme.",
                "map" => "Mapa: Dados obtidos via Google Analytics e mapa gerado via Google Charts.",
                "cms" => "Gerenciador de Conteúdos: desenvolvido utilizando o Framework PHP CodeIgniter.",
                "translate" => "Tradução: Google Tradutor."
            );
    }
}

function getContactStaticData($lang) {
    switch($lang) {
        case "pt":
            return array(
                "title" => "Contato",
                "subtitle" => "Deixe sua mensagem.",
                "name" => "Nome",
                "email" => "E-Mail",
                "message" => "Mensagem",
                "send" => "Enviar"
            );
        case "en":
            return array(
                "title" => "Contact",
                "subtitle" => "Leave your message.",
                "name" => "Name",
                "email" => "Email",
                "message" => "Message",
                "send" => "Submit"
            );
        case "es":
            return array(
                "title" => "Contacto",
                "subtitle" => "Deja tu mensaje.",
                "name" => "Nombre",
                "email" => "E-Mail",
                "message" => "Mensaje",
                "send" => "Enviar"
            );
        case "fr":
            return array(
                "title" => "Contacter",
                "subtitle" => "Laissez votre message.",
                "name" => "Nom",
                "email" => "Courriel",
                "message" => "Merci beaucoup",
                "send" => "Envoyer"
            );
        case "it":
            return array(
                "title" => "Contattaci",
                "subtitle" => "Lascia il tuo messaggio.",
                "name" => "Nome",
                "email" => "E-Mail",
                "message" => "Messaggio",
                "send" => "Inviare"
            );
        case "ge":
            return array(
                "title" => "Kontaktieren",
                "subtitle" => "Hinterlassen Sie Ihre Nachricht",
                "name" => "Name",
                "email" => "E-Mail",
                "message" => "Danke",
                "send" => "Sendens"
            );
        default:
            return array(
                "title" => "Contato",
                "subtitle" => "Deixe sua mensagem.",
                "name" => "Nome",
                "email" => "E-Mail",
                "message" => "Mensagem",
                "send" => "Enviar"
            );
    }
}