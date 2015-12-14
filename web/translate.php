<?php
header('Content-Type: text/html; charset=utf-8');
/*FDO
$trans=json_decode('{"Recherche (Aura)":{"placeholder":"Que voudriez-vous savoir?"},"3385167221":{"HTML":"<a href=\"javascript:void(0)\" class=\"homeLink\">{!CompanyName}<\/a>\t\t"},"En-tête du profil (Aura)":{"communityManagementLabel":"Gestion de la communauté?","logoutLabel":"Déconnexion","loginLabel":"Connexion","communitySetupLabel":"Configuration de la communauté","viewProfileLabel":"Voir le Profil","contactSupportLabel":"Contacter le support","homeLabel":"Accueil","userSettingsLabel":"Mes paramètres"},"En-tête de l\'identité (Aura)":{"logoutLabel":"Déconnexion","loginLabel":"Connexion","headerText":"Lanceur d\'app","homeLabel":"Accueil"},"Éditeur de recherche (Aura)":{"selectTopicLabel":"Sélectionner la destination du Message","signInActionLabel":"Connectez-vous pour poser une question","placeholder":"Rechercher des articles et discussions","privateTag":"Privé","switcherLabel":"<span class=\"switcher-label\" >Regardez ces <\/span><a href=\"javascript:void(0);\" class=\"switcher-option article selected\"><span >Articles<\/span><\/a><span class=\"separator-label\" > OU <\/span><a href=\"javascript:void(0);\" class=\"switcher-option question\"><span >Discussions<\/span><\/a>","contineActionLabel":"Posez une nouvelle question","caseSubmitButtonLabel":"Soumettre en privé","caseQuickActionName":"NewCase","continueLabel":"Vous ne trouvez pas ce que vous cherchez?","topicRequired":"(Obligatoire)","triggerLabel":"Poster à","contactSupportLabel":"Contacter le support"},"Barre de navigation (Aura)":{"topicMenuLabel":"RUBRIQUES"},"Bouton Statut de la requête (Aura)":{"activeStatusLabel":"Clôturer la requête","inActiveStatusLabel":"Ré-Ouvrir la requête"},"Éditeur de requêtes (Aura)":{"postButtonLabel":"Commentaire","placeholderText":"Ecrire un nouveau commentaire...","mobileHeaderTitle":"Nouveau Commentaire"},"Création d\'une requête (Aura)":{"deflectionSubHeader":"Regardez ces articles...","confirmationMessageTitle":"Votre requête a bien été soumise.","deflectionNotHelpful":"Vous n\'avez pas trouvé ce que vous cherchiez?","confirmationMessageDescription":"Nous reviendrons vers vous rapidement.","headerTitle":"Contacter le Service Client","deflectionTitle":"Besoin d\'une réponse rapide?"},"Recherche spécifique (Aura)":{"placeholder":"Que voudriez-vous savoir?"},"Articles tendance (Aura)":{"title":"Populaire"},"Contacter le support (Aura)":{"label":"Contacter le support","header":"Support"},"Accueil du profil (Aura)":{"contactSupportLabel":"Contacter le support","headerLabel":"Mes requêtes"},"Navigation dans les catégories étendue (Aura)":{"title":""},"Catégories de données spécifiques (Aura)":{"title":"Catégories sélectionnées"},"1961421836":{"HTML":"<span class=\"alertIcon forceIcon selfServiceIcon\" data-key=\"alert\" data-icon=\"\">\n<span>Quelque chose s\'est mal passé. Merci de rafraîchir la page et de réessayer.<\/span>\t\t"},"3482328624":{"HTML":"<span>REINITIALISER LE MOT DE PASSE<\/span>\t\t"},"3215785683":{"HTML":"<p>Merci d\'entrer l\'adresse email que vous avez utilisé lors de la création de votre compte. Un email sera envoyé à cette adresse avec les instructions pour réinitialiser votre mot de passe.<\/p>\t\t"},"3155127621":{"HTML":"Rejoignez la communauté pour recevoir une information et un service client personnalisés.\t\t"},"Auto-inscription (Aura)":{"submitButtonLabel":"Soumettre","lastnameLabel":"Nom","firstnameLabel":"Prénom"},"Changer le mot de passe (Aura)":{"submitButtonLabel":"Soumettre","newPasswordLabel":"Nouveau mot de passe","currentPasswordLabel":"Mot de passe actuel","confirmPasswordLabel":"Confirmer le mot de passe"},"Formulaire de connexion (Aura)":{"usernameLabel":"Nom d\'utilisateur","loginButtonLabel":"Connexion","forgotPasswordLabel":"Mot de passe oublié?","passwordLabel":"Mot de passe","selfRegisterLabel":"Pas encore membre?"},"Lien de connexion de l\'employé (Aura)":{"employeeLoginLinkLabel":"Vous êtes un employé? Connexion ici"},"3285751804":{"HTML":"<p>MAINTENANT, VERIFIEZ VOTRE EMAIL<\/p>\t\t"},"2461412729":{"HTML":"<p>Regardez votre compte email associé à votre compte utilisateur pour les instructions de réinitialisation de votre mot de passe. N\'oubliez pas de vérfier le dossier spam, où les messages automatisés sont parfois filtrés.&nbsp;<\/p>\n    <p>&nbsp;Si vous ne pouvez toujours pas vous connecter, contactez votre administrateur.<\/p>\t\t"},"Mes requêtes (Aura)":{"caseCreateLabel":"Créer une requête","headerLabel":"Mes requêtes"},"Titre principal (Aura)":{"title":"Bienvenue!","bannerTextWithoutKnowledge":"Explorez d\'autres <a href=\"javascript:void(0)\" class=\"headlineDiscussions\">discussions<\/a> sur ce sujet.","bannerText":"Un endroit pour trouver des réponses, et poser des questions","bannerTextWithKnowledge":"Explorer d\'autres <a href=\"javascript:void(0)\" class=\"headlineArticles\">articles<\/a> et <a href=\"javascript:void(0)\" class=\"headlineDiscussions\">discussions<\/a> sur ce sujet."},"Onglets d\'accueil (Aura)":{"myFeedTabLabel":"Mon Flux","discussionTabLabel":"Discussions","featuredTabLabel":"Selection"},"Articles tendances de la rubrique (Aura)":{"title":"Populaire"},"1305125637":{"HTML":"<span id=\"cta_header\" class=\"cta_header\">Vous ne trouvez pas ce que vous recherchez?<\/span>\t\t"},"180066910":{"HTML":"<p style=\"font-size: 16px; font-style: normal; text-align: center;\">Vous ne trouvez pas ce que vous recherchez?<\/p>\t\t"},"Demander à la communauté (Aura)":{"label":"Demander à la communauté"},"Liste des résultats (Aura)":{"discussionTabLabel":"Discussions","articleTabLabel":"Articles"},"Onglets du profil utilisateur (Aura)":{"feedTabLabel":"Activités","casesTabLabel":"Requêtes"},"Rubriques associées (Aura)":{"title":"Sujets liés"},"552854970":{"HTML":"<p style=\"font-size: 16px; font-style: normal; text-align: center;\">Vous ne trouvez pas ce que vous cherchez?<\/p>\t\t"},"Classement de la réputation (Aura)":{"title":"Classement"},"Rubriques tendance (Aura)":{"title":"Sujets les plus discutés"},"3622932993":{"HTML":"<span id=\"cta_header\" class=\"cta_header\">Vous ne trouvez pas ce que vous cherchez?<\/span>\t\t"},"3924988542":{"HTML":"<p>Vérifiez le compte email associé à votre compte pour les instructions de réinitialisation de mot de passe. N\'oubliez pas de regarder dans le dossier spam, ou sont parfois envoyés les messages automatisés.&nbsp;<\/p>\n    <p>&nbsp;Si vous ne pouvez toujours pas vous connecter, contactez votre administrateur.<\/p>\t\t"},"Personnes compétentes (Aura)":{"title":"Personnes Compétentes"},"Éditeur Chatter de requêtes (Aura)":{"postButtonLabel":"Post","placeholderText":"Rédigez un message...","mobileHeaderTitle":"Nouveau Message"},"1159326155":{"HTML":"\n    <span id=\"cta_header\" class=\"cta_header\">Vous ne trouvez pas ce que vous cherchez?<\/span>\n  \t\t"},"718207249":{"HTML":"\n    <p style=\"font-size: 16px; font-style: normal; text-align: center;\">Vous ne trouvez pas ce que vous cherchez?<\/p>\n  \t\t"},"1991457908":{"HTML":"<span>REINITIALISER LE MOT DE PASSE<\/span>\t\t"},"3894024920":{"HTML":"<p>Merci d\'entrer l\'adresse email que vous avez utilisé lors de la création de votre compte. Un email sera envoyé à cette adresse avec les instructions pour réinitialiser votre mot de passe.<\/p>\t\t"},"3794820180":{"HTML":"Rejoignez la communauté pour recevoir une information et un service client personnalisés.\t\t"},"3621325578":{"HTML":"\n    <p>MAINTENANT, VERIFIEZ VOTRE EMAIL<\/p>\n  \t\t"},"983793454":{"HTML":"\n    <p>Vérifiez le compte email associé à votre compte pour les instructions de réinitialisation de mot de passe. N\'oubliez pas de regarder dans le dossier spam, ou sont parfois envoyés les messages automatisés.&nbsp;<\/p>\n    <p>&nbsp;Si vous ne pouvez toujours pas vous connecter, contactez votre administrateur.<\/p>\t\t\n"}}',true);
*/

if (!empty($_FILES))
{
    //echo "<pre>";
  //  print_r($_FILES);
//  $file_get_contents($_FILES['file']['tmp_name']);
  $xml=simplexml_load_file($_FILES['thefile']['tmp_name']) or die("Error: Cannot create object");

}
else die('you need to supply a file');
if($_POST['baseLanguage']=="French"){

$trans=json_decode('{
   "Recherche (Aura)":{
      "placeholder":"Que voudriez-vous savoir?"
   },
   "3385167221":{
      "HTML":"<a href=\"javascript:void(0)\" class=\"homeLink\">{!CompanyName}<\/a>\t\t"
   },
   "En-tête du profil (Aura)":{
      "communityManagementLabel":"Gestion de la communauté?",
      "logoutLabel":"Déconnexion",
      "loginLabel":"Connexion",
      "communitySetupLabel":"Configuration de la communauté",
      "viewProfileLabel":"Voir le Profil",
      "contactSupportLabel":"Contacter le support",
      "homeLabel":"Accueil",
      "userSettingsLabel":"Mes paramètres"
   },
   "En-tête de l\'identité (Aura)":{
      "logoutLabel":"Déconnexion",
      "loginLabel":"Connexion",
      "headerText":"Lanceur d\'app",
      "homeLabel":"Accueil"
   },
   "Éditeur de recherche (Aura)":{
      "selectTopicLabel":"Sélectionner la destination du Message",
      "signInActionLabel":"Connectez-vous pour poser une question",
      "placeholder":"Rechercher des articles et discussions",
      "privateTag":"Privé",
      "switcherLabel":"<span class=\"switcher-label\" >Regardez ces <\/span><a href=\"javascript:void(0);\" class=\"switcher-option article selected\"><span >Articles<\/span><\/a><span class=\"separator-label\" > OU <\/span><a href=\"javascript:void(0);\" class=\"switcher-option question\"><span >Discussions<\/span><\/a>",
      "contineActionLabel":"Posez une nouvelle question",
      "caseSubmitButtonLabel":"Soumettre en privé",
      "caseQuickActionName":"NewCase",
      "continueLabel":"Vous ne trouvez pas ce que vous cherchez?",
      "topicRequired":"(Obligatoire)",
      "triggerLabel":"Poster à",
      "contactSupportLabel":"Contacter le support"
   },
   "Barre de navigation (Aura)":{
      "topicMenuLabel":"RUBRIQUES"
   },
   "Bouton Statut de la requête (Aura)":{
      "activeStatusLabel":"Clôturer la requête",
      "inActiveStatusLabel":"Ré-Ouvrir la requête"
   },
   "Éditeur de requêtes (Aura)":{
      "postButtonLabel":"Commentaire",
      "placeholderText":"Ecrire un nouveau commentaire...",
      "mobileHeaderTitle":"Nouveau Commentaire"
   },
   "Création d\'une requête (Aura)":{
      "deflectionSubHeader":"Regardez ces articles...",
      "confirmationMessageTitle":"Votre requête a bien été soumise.",
      "deflectionNotHelpful":"Vous n\'avez pas trouvé ce que vous cherchiez?",
      "confirmationMessageDescription":"Nous reviendrons vers vous rapidement.",
      "headerTitle":"Contacter le Service Client",
      "deflectionTitle":"Besoin d\'une réponse rapide?"
   },
   "Recherche spécifique (Aura)":{
      "placeholder":"Que voudriez-vous savoir?"
   },
   "Articles tendance (Aura)":{
      "title":"Populaire"
   },
   "Contacter le support (Aura)":{
      "label":"Contacter le support",
      "header":"Support"
   },
   "Pied de page (Aura)": {
    "label": "Poser une question",
    "headerLabel": "Vous ne trouvez pas ce que vous cherchez?",
    "contactSupportLabel": "Contacter le support"
  },
   "Accueil du profil (Aura)":{
      "contactSupportLabel":"Contacter le support",
      "headerLabel":"Mes requêtes"
   },
   "Navigation dans les catégories étendue (Aura)":{
      "title":""
   },
   "Catégories de données spécifiques (Aura)":{
      "title":"Catégories sélectionnées"
   },
   "1961421836":{
      "HTML":"<span class=\"alertIcon forceIcon selfServiceIcon\" data-key=\"alert\" data-icon=\"\">\n<span>Quelque chose s\'est mal passé. Merci de rafraîchir la page et de réessayer.<\/span>\t\t"
   },
   "3482328624":{
      "HTML":"<span>REINITIALISER LE MOT DE PASSE<\/span>\t\t"
   },
   "3215785683":{
      "HTML":"<p>Merci d\'entrer l\'adresse email que vous avez utilisé lors de la création de votre compte. Un email sera envoyé à cette adresse avec les instructions pour réinitialiser votre mot de passe.<\/p>\t\t"
   },
   "3155127621":{
      "HTML":"Rejoignez la communauté pour recevoir une information et un service client personnalisés.\t\t"
   },
   "Auto-inscription (Aura)":{
      "submitButtonLabel":"Soumettre",
      "lastnameLabel":"Nom",
      "firstnameLabel":"Prénom"
   },
   "Changer le mot de passe (Aura)":{
      "submitButtonLabel":"Soumettre",
      "newPasswordLabel":"Nouveau mot de passe",
      "currentPasswordLabel":"Mot de passe actuel",
      "confirmPasswordLabel":"Confirmer le mot de passe"
   },
   "Formulaire de connexion (Aura)":{
      "usernameLabel":"Nom d\'utilisateur",
      "loginButtonLabel":"Connexion",
      "forgotPasswordLabel":"Mot de passe oublié?",
      "passwordLabel":"Mot de passe",
      "selfRegisterLabel":"Pas encore membre?"
   },
   "Lien de connexion de l\'employé (Aura)":{
      "employeeLoginLinkLabel":"Vous êtes un employé? Connexion ici"
   },
   "3285751804":{
      "HTML":"<p>MAINTENANT, VERIFIEZ VOTRE EMAIL<\/p>\t\t"
   },
   "2461412729":{
      "HTML":"<p>Regardez votre compte email associé à votre compte utilisateur pour les instructions de réinitialisation de votre mot de passe. N\'oubliez pas de vérfier le dossier spam, où les messages automatisés sont parfois filtrés.&nbsp;<\/p>\n    <p>&nbsp;Si vous ne pouvez toujours pas vous connecter, contactez votre administrateur.<\/p>\t\t"
   },
   "Mes requêtes (Aura)":{
      "caseCreateLabel":"Créer une requête",
      "headerLabel":"Mes requêtes"
   },
   "Titre principal (Aura)":{
      "title":"Bienvenue!",
      "bannerTextWithoutKnowledge":"Explorez d\'autres <a href=\"javascript:void(0)\" class=\"headlineDiscussions\">discussions<\/a> sur ce sujet.",
      "bannerText":"Un endroit pour trouver des réponses, et poser des questions",
      "bannerTextWithKnowledge":"Explorer d\'autres <a href=\"javascript:void(0)\" class=\"headlineArticles\">articles<\/a> et <a href=\"javascript:void(0)\" class=\"headlineDiscussions\">discussions<\/a> sur ce sujet."
   },
   "Onglets d\'accueil (Aura)":{
      "myFeedTabLabel":"Mon Flux",
      "discussionTabLabel":"Discussions",
      "featuredTabLabel":"Selection"
   },
   "Articles tendances de la rubrique (Aura)":{
      "title":"Populaire"
   },
   "1305125637":{
      "HTML":"<span id=\"cta_header\" class=\"cta_header\">Vous ne trouvez pas ce que vous recherchez?<\/span>\t\t"
   },
   "180066910":{
      "HTML":"<p style=\"font-size: 16px; font-style: normal; text-align: center;\">Vous ne trouvez pas ce que vous recherchez?<\/p>\t\t"
   },
   "Demander à la communauté (Aura)":{
      "label":"Demander à la communauté"
   },
   "Liste des résultats (Aura)":{
      "discussionTabLabel":"Discussions",
      "articleTabLabel":"Articles"
   },
   "Onglets du profil utilisateur (Aura)":{
      "feedTabLabel":"Activités",
      "casesTabLabel":"Requêtes"
   },
   "Rubriques associées (Aura)":{
      "title":"Sujets liés"
   },
   "552854970":{
      "HTML":"<p style=\"font-size: 16px; font-style: normal; text-align: center;\">Vous ne trouvez pas ce que vous cherchez?<\/p>\t\t"
   },
   "Classement de la réputation (Aura)":{
      "title":"Classement"
   },
   "Rubriques tendance (Aura)":{
      "title":"Sujets les plus discutés"
   },
   "3622932993":{
      "HTML":"<span id=\"cta_header\" class=\"cta_header\">Vous ne trouvez pas ce que vous cherchez?<\/span>\t\t"
   },
   "3924988542":{
      "HTML":"<p>Vérifiez le compte email associé à votre compte pour les instructions de réinitialisation de mot de passe. N\'oubliez pas de regarder dans le dossier spam, ou sont parfois envoyés les messages automatisés.&nbsp;<\/p>\n    <p>&nbsp;Si vous ne pouvez toujours pas vous connecter, contactez votre administrateur.<\/p>\t\t"
   },
   "Personnes compétentes (Aura)":{
      "title":"Personnes Compétentes"
   },
   "Éditeur Chatter de requêtes (Aura)":{
      "postButtonLabel":"Post",
      "placeholderText":"Rédigez un message...",
      "mobileHeaderTitle":"Nouveau Message"
   },
   "1159326155":{
      "HTML":"\n    <span id=\"cta_header\" class=\"cta_header\">Vous ne trouvez pas ce que vous cherchez?<\/span>\n  \t\t"
   },
   "718207249":{
      "HTML":"\n    <p style=\"font-size: 16px; font-style: normal; text-align: center;\">Vous ne trouvez pas ce que vous cherchez?<\/p>\n  \t\t"
   },
   "1991457908":{
      "HTML":"<span>REINITIALISER LE MOT DE PASSE<\/span>\t\t"
   },
   "3894024920":{
      "HTML":"<p>Merci d\'entrer l\'adresse email que vous avez utilisé lors de la création de votre compte. Un email sera envoyé à cette adresse avec les instructions pour réinitialiser votre mot de passe.<\/p>\t\t"
   },
   "3794820180":{
      "HTML":"Rejoignez la communauté pour recevoir une information et un service client personnalisés.\t\t"
   },
   "3621325578":{
      "HTML":"\n    <p>MAINTENANT, VERIFIEZ VOTRE EMAIL<\/p>\n  \t\t"
   },"User Profile (Widget)": {
    "Title": "Profil Utilisateur",
    "NavTitle": "Profil Utilisateur"
  },
  "Home (Widget)": {
    "Title": "Accueil",
    "NavTitle": "Accueil"
  },
  "Search (Widget)": {
    "Title": "Recherche",
    "NavTitle": "Recherche"
  },
  "Question Detail (Widget)": {
    "Title": "Détail de la question",
    "NavTitle": "Détail de la question"
  },
  "Article Detail (Widget)": {
    "Title": "Détail de l\'article",
    "NavTitle": "Détail de l\'article"
  },
  "Record Detail (Widget)": {
    "Title": "Détail de l\'enregistrement",
    "NavTitle": "Détail de l\'enregistrement"
  },
  "User Settings (Widget)": {
    "Title": "Paramètres Utilisateur",
    "NavTitle": "Paramètres Utilisateur"
  },
  "Self Register (Widget)": {
    "Title": "Auto-enregistrement",
    "NavTitle": "Autoenregistrement"
  },
  "Forgot Password (Widget)": {
    "Title": "Mot de passe oublié",
    "NavTitle": "Mot de passe oublié"
  },
  "Password Reset Information (Widget)": {
    "Title": "Information pour la reinitialisation du mot de passe",
    "NavTitle": "InformationReinitialisation"
  },
  "Login Home (Widget)": {
    "Title": "Accueil Connection",
    "NavTitle": "Default"
  },
   "983793454":{
      "HTML":"\n    <p>Vérifiez le compte email associé à votre compte pour les instructions de réinitialisation de mot de passe. N\'oubliez pas de regarder dans le dossier spam, ou sont parfois envoyés les messages automatisés.&nbsp;<\/p>\n    <p>&nbsp;Si vous ne pouvez toujours pas vous connecter, contactez votre administrateur.<\/p>\t\t\n"
   }
}',true);
}
else{

$trans=json_decode('{
  "Search (Aura)": {
    "placeholder": "Que voudriez-vous savoir?"
  },
  "3385167221": {
    "HTML": "<a href=\"javascript:void(0)\" class=\"homeLink\">{!CompanyName}<\/a>\t\t"
  },
  "Profile Header (Aura)": {
    "communityManagementLabel": "Gestion de la communauté?",
    "logoutLabel": "Déconnexion",
    "loginLabel": "Connexion",
    "communitySetupLabel": "Configuration de la communauté",
    "viewProfileLabel": "Voir le Profil",
    "contactSupportLabel": "Contacter le support",
    "homeLabel": "Accueil",
    "userSettingsLabel": "Mes paramètres"
  },
  "Identity Header (Aura)": {
    "logoutLabel": "Déconnexion",
    "loginLabel": "Connexion",
    "headerText": "Lanceur d\'app",
    "homeLabel": "Accueil"
  },
  "Search Publisher (Aura)": {
    "selectTopicLabel": "Sélectionner la destination du Message",
    "signInActionLabel": "Connectez-vous pour poser une question",
    "placeholder": "Rechercher des articles et discussions",
    "privateTag": "Privé",
    "switcherLabel": "<span class=\"switcher-label\" >Regardez ces <\/span><a href=\"javascript:void(0);\" class=\"switcher-option article selected\"><span >Articles<\/span><\/a><span class=\"separator-label\" > OU <\/span><a href=\"javascript:void(0);\" class=\"switcher-option question\"><span >Discussions<\/span><\/a>",
    "contineActionLabel": "Posez une nouvelle question",
    "caseSubmitButtonLabel": "Soumettre en privé",
    "caseQuickActionName": "NewCase",
    "continueLabel": "Vous ne trouvez pas ce que vous cherchez?",
    "topicRequired": "(Obligatoire)",
    "triggerLabel": "Poster à",
    "contactSupportLabel": "Contacter le support"
  },
  "Navigation Bar (Aura)": {
    "topicMenuLabel": "RUBRIQUES"
  },
  "Case Status Button (Aura)": {
    "activeStatusLabel": "Clôturer la requête",
    "inActiveStatusLabel": "Ré-Ouvrir la requête"
  },
  "Case Publisher (Aura)": {
    "postButtonLabel": "Commentaire",
    "placeholderText": "Ecrire un nouveau commentaire...",
    "mobileHeaderTitle": "Nouveau Commentaire"
  },
  "Case Creation (Aura)": {
    "deflectionSubHeader": "Regardez ces articles...",
    "confirmationMessageTitle": "Votre requête a bien été soumise.",
    "deflectionNotHelpful": "Vous n\'avez pas trouvé ce que vous cherchiez?",
    "confirmationMessageDescription": "Nous reviendrons vers vous rapidement.",
    "headerTitle": "Contacter le Service Client",
    "deflectionTitle": "Besoin d\'une réponse rapide?"
  },
  "Featured Search (Aura)": {
    "placeholder": "Que voudriez-vous savoir?"
  },
  "Trending Articles (Aura)": {
    "title": "Populaire"
  },
  "Contact Support (Aura)": {
    "label": "Contacter le support",
    "header": "Support"
  },
  "Profile Home (Aura)": {
    "contactSupportLabel": "Contacter le support",
    "headerLabel": "Mes requêtes"
  },
  "Expanded Category Navigation (Aura)": {
    "title": ""
  },
  "Featured Data Categories (Aura)": {
    "title": "Catégories sélectionnées"
  },
  "1961421836": {
    "HTML": "<span class=\"alertIcon forceIcon selfServiceIcon\" data-key=\"alert\" data-icon=\"\">\n<span>Quelque chose s\'est mal passé. Merci de rafraîchir la page et de réessayer.<\/span>\t\t"
  },
  "3482328624": {
    "HTML": "<span>REINITIALISER LE MOT DE PASSE<\/span>\t\t"
  },
  "3215785683": {
    "HTML": "<p>Merci d\'entrer l\'adresse email que vous avez utilisé lors de la création de votre compte. Un email sera envoyé à cette adresse avec les instructions pour réinitialiser votre mot de passe.<\/p>\t\t"
  },
  "3155127621": {
    "HTML": "Rejoignez la communauté pour recevoir une information et un service client personnalisés.\t\t"
  },
  "Self Registration (Aura)": {
    "submitButtonLabel": "Soumettre",
    "lastnameLabel": "Nom",
    "firstnameLabel": "Prénom"
  },
  "Change Password (Aura)": {
    "submitButtonLabel": "Soumettre",
    "newPasswordLabel": "Nouveau mot de passe",
    "currentPasswordLabel": "Mot de passe actuel",
    "confirmPasswordLabel": "Confirmer le mot de passe"
  },
  "Login Form (Aura)": {
    "usernameLabel": "Nom d\'utilisateur",
    "loginButtonLabel": "Connexion",
    "forgotPasswordLabel": "Mot de passe oublié?",
    "passwordLabel": "Mot de passe",
    "selfRegisterLabel": "Pas encore membre?"
  },
  "Employee Login Link (Aura)": {
    "employeeLoginLinkLabel": "Vous êtes un employé? Connexion ici"
  },
  "3285751804": {
    "HTML": "<p>MAINTENANT, VERIFIEZ VOTRE EMAIL<\/p>\t\t"
  },
  "2461412729": {
    "HTML": "<p>Regardez votre compte email associé à votre compte utilisateur pour les instructions de réinitialisation de votre mot de passe. N\'oubliez pas de vérfier le dossier spam, où les messages automatisés sont parfois filtrés.&nbsp;<\/p>\n    <p>&nbsp;Si vous ne pouvez toujours pas vous connecter, contactez votre administrateur.<\/p>\t\t"
  },
  "My Cases (Aura)": {
    "caseCreateLabel": "Nouvelle requête",
    "headerLabel": "Mes requêtes"
  },
  "Headline (Aura)": {
    "title": "Bienvenue!",
    "bannerTextWithoutKnowledge": "Explorez d\'autres <a href=\"javascript:void(0)\" class=\"headlineDiscussions\">discussions<\/a> sur ce sujet.",
    "bannerText": "Un endroit pour trouver des réponses, et poser des questions",
    "bannerTextWithKnowledge": "Explorer d\'autres&nbsp;<a href=\"javascript:void(0)\" class=\"headlineArticles\">articles<\/a>&nbsp;et&nbsp;<a href=\"javascript:void(0)\" class=\"headlineDiscussions\">discussions<\/a>&nbsp;sur ce sujet."
  },
  "Home Tabs (Aura)": {
    "myFeedTabLabel": "Mon Flux",
    "discussionTabLabel": "Discussions",
    "featuredTabLabel": "Selection"
  },
  "Topic Trending Articles (Aura)": {
    "title": "Populaire"
  },
  "1305125637": {
    "HTML": "<span id=\"cta_header\" class=\"cta_header\">Vous ne trouvez pas ce que vous recherchez?<\/span>\t\t"
  },
  "180066910": {
    "HTML": "<p style=\"font-size: 16px; font-style: normal; text-align: center;\">Vous ne trouvez pas ce que vous recherchez?<\/p>\t\t"
  },
  "Ask the Community (Aura)": {
    "label": "Poser une question"
  },
  "Results List (Aura)": {
    "discussionTabLabel": "Discussions",
    "articleTabLabel": "Articles"
  },
  "User Profile Tabs (Aura)": {
    "feedTabLabel": "Activités",
    "casesTabLabel": "Requêtes",
    "headerLabel": "Mes Requêtes",
    "caseCreateLabel": "Nouvelle requête"
  },
  "Contact Support (Widget)": {
    "Title": "Contacter le support",
    "NavTitle": "Contacter le support"
  },
  "Record List (Widget)": {
    "Title": "Liste d\'enregistrements",
    "NavTitle": "Liste d\'enregistrements"
  },
  "Related Record List (Widget)": {
    "Title": "Liste d\'enregistrements liés",
    "NavTitle": "Liste d\'enregistrements liés"
  },
  "Feed Detail (Widget)": {
    "Title": "Détail du fil",
    "NavTitle": "Détail du fil"
  },
  "Chatter Case Detail (Widget)": {
    "Title": "Détail de la requête (Chatter)",
    "NavTitle": "Détail de la requête (Chatter)"
  },
  "Basic Case Detail (Widget)": {
    "Title": "Détail basique de la requête",
    "NavTitle": "Détail basique de la requête"
  },
  "Topic Detail (Widget)": {
    "Title": "Détail de la rubrique",
    "NavTitle": "Détail de la rubrique"
  },
  "Related Topics (Aura)": {
    "title": "Rubriques liées"
  },
  "552854970": {
    "HTML": "<p style=\"font-size: 16px; font-style: normal; text-align: center;\">Vous ne trouvez pas ce que vous cherchez?<\/p>\t\t"
  },
  "Reputation Leaderboard (Aura)": {
    "title": "Classement"
  },
  "Trending Topics (Aura)": {
    "title": "Rubriques les plus actives"
  },
  "3622932993": {
    "HTML": "<span id=\"cta_header\" class=\"cta_header\">Vous ne trouvez pas ce que vous cherchez?<\/span>\t\t"
  },
  "3924988542": {
    "HTML": "<p>Vérifiez le compte email associé à votre compte pour les instructions de réinitialisation de mot de passe. N\'oubliez pas de regarder dans le dossier spam, ou sont parfois envoyés les messages automatisés.&nbsp;<\/p>\n    <p>&nbsp;Si vous ne pouvez toujours pas vous connecter, contactez votre administrateur.<\/p>\t\t"
  },
  "Knowledgeable People (Aura)": {
    "title": "Personnes Compétentes"
  },
  "Case Chatter Publisher (Aura)": {
    "postButtonLabel": "Partager",
    "placeholderText": "Rédigez un message...",
    "mobileHeaderTitle": "Nouveau Message"
  },
  "Call To Action Section (Aura)": {
    "askCommunityLabel": "Poser une question",
    "headerLabel": "Vous ne trouvez pas ce que vous cherchez?",
    "contactSupportLabel": "Contacter le support"
  },
  "Record Information (Aura)": {
    "relatedTabLabel": "Associé",
    "detailsTabLabel": "Détails",
    "discussionsTabLabel": "Fil"
  },
  "User Profile (Widget)": {
    "Title": "Profil Utilisateur",
    "NavTitle": "Profil Utilisateur"
  },
  "Home (Widget)": {
    "Title": "Accueil",
    "NavTitle": "Accueil"
  },
  "Search (Widget)": {
    "Title": "Recherche",
    "NavTitle": "Recherche"
  },
  "Question Detail (Widget)": {
    "Title": "Détail de la question",
    "NavTitle": "Détail de la question"
  },
  "Article Detail (Widget)": {
    "Title": "Détail de l\'article",
    "NavTitle": "Détail de l\'article"
  },
  "Record Detail (Widget)": {
    "Title": "Détail de l\'enregistrement",
    "NavTitle": "Détail de l\'enregistrement"
  },
  "User Settings (Widget)": {
    "Title": "Paramètres Utilisateur",
    "NavTitle": "Paramètres Utilisateur"
  },
  "Self Register (Widget)": {
    "Title": "Auto-enregistrement",
    "NavTitle": "Autoenregistrement"
  },
  "Forgot Password (Widget)": {
    "Title": "Mot de passe oublié",
    "NavTitle": "Mot de passe oublié"
  },
  "Password Reset Information (Widget)": {
    "Title": "Information pour la reinitialisation du mot de passe",
    "NavTitle": "InformationReinitialisation"
  },
  "Login Home (Widget)": {
    "Title": "Accueil Connection",
    "NavTitle": "Default"
  },
  "1159326155": {
    "HTML": "\n    <span id=\"cta_header\" class=\"cta_header\">Vous ne trouvez pas ce que vous cherchez?<\/span>\n  \t\t"
  },
  "718207249": {
    "HTML": "\n    <p style=\"font-size: 16px; font-style: normal; text-align: center;\">Vous ne trouvez pas ce que vous cherchez?<\/p>\n  \t\t"
  },
  "1991457908": {
    "HTML": "<span>REINITIALISER LE MOT DE PASSE<\/span>\t\t"
  },
  "3894024920": {
    "HTML": "<p>Merci d\'entrer l\'adresse email que vous avez utilisé lors de la création de votre compte. Un email sera envoyé à cette adresse avec les instructions pour réinitialiser votre mot de passe.<\/p>\t\t"
  },
  "3794820180": {
    "HTML": "Rejoignez la communauté pour recevoir une information et un service client personnalisés.\t\t"
  },
  "3621325578": {
    "HTML": "\n    <p>MAINTENANT, VERIFIEZ VOTRE EMAIL<\/p>\n  \t\t"
  },
  "983793454": {
    "HTML": "\n    <p>Vérifiez le compte email associé à votre compte pour les instructions de réinitialisation de mot de passe. N\'oubliez pas de regarder dans le dossier spam, ou sont parfois envoyés les messages automatisés.&nbsp;<\/p>\n    <p>&nbsp;Si vous ne pouvez toujours pas vous connecter, contactez votre administrateur.<\/p>\t\t\n"
  }
}',true);}

//print_r($trans);

$result=array();
// change content

foreach ($xml->xpath('//component') as $key => $component) {
	//$context='';
	//foreach($component->attributes() as $a => $b){
	//	if($a=="context")$context=(String)$b;
	//}
	foreach($component->field as  $field){
		if((String)$field->attributes()->name=="HTML"){
			$xml->component[$key]->field= new SimpleXMLElement("<field name=\"HTML\" language=\"".(String)$field->attributes()->language."\" exportcrc=\"".(String)$field->attributes()->exportcrc."\"><![CDATA[".$trans[(string)$field->attributes()->exportcrc]['HTML']."]]></field>");
			}

	    $i=0;
		foreach($field->property as $property){

			if(isset($trans[(string)$component->attributes()->context][(string)$property->attributes()->name])){
				if(count($xml->component[$key]->field->property)>1){
									$xml->component[$key]->field->property[$i]= new SimpleXMLElement("<property  name=\"".(string)$property->attributes()->name."\"><![CDATA[".$trans[(string)$component->attributes()->context][(string)$property->attributes()->name]."]]></property>");
			}
				else {
					$xml->component[$key]->field->property= new SimpleXMLElement("<property name=\"".(string)$property->attributes()->name."\"><![CDATA[".$trans[(string)$component->attributes()->context][(string)$property->attributes()->name]."]]></property>");
					}
				}
		$i++;
		}
	}
}
header('Content-disposition: attachment; filename=translated.xml');
header('Content-type: text/xml');
echo $xml->asXml();

//PRINT FILE AS JSON
/*
foreach ($xml->xpath('//component') as $component) {
	$context='';
	//foreach($component->attributes() as $a => $b){
	//	if($a=="context")$context=(String)$b;
	//}
	foreach($component->field as $field){
		if((String)$field->attributes()->name=="HTML")					if(!isset($result[(String)$field->attributes()->exportcrc]['HTML']))$result[(String)$field->attributes()->exportcrc]['HTML']=(string)$field;
		foreach($field->property as $property){
			if(!isset($result[(String)$component->attributes()->context][(String)$property->attributes()->name]))
			$result[(String)$component->attributes()->context][(String)$property->attributes()->name]=(string)$property;
		}
	}
}


print_r(json_encode($result,JSON_UNESCAPED_UNICODE));
*/

//	print_r("_______________________\r\n");


/*
$json_string=json_encode($xml->xpath('//component'));
$result_array = json_decode($json_string, TRUE);
//print_r($result_array);


foreach($result_array as $item){
	foreach($item['field'] as $field){
		if(!isset($field['name']))
			if(isset($field['@attributes'])){
				$result[$item['@attributes']['context']][$field['@attributes']['name']]="content1";
			}
			else foreach($field as $property){
				$result[$item['@attributes']['context']][$property['@attributes']['name']]="content2";
			}
	}
}

print_r(json_encode($result,JSON_UNESCAPED_UNICODE));
// Load XML with SimpleXml from string
//$root = simplexml_load_string('<root><a>foo</a></root>');
// Modify a node
//$root->a = 'bar';
// Saving the whole modified XML to a new filename
//$root->asXml('updated.xml');
// Save only the modified node
//$root->a->asXml('only-a.xml');

*/

/*



*/
?>
