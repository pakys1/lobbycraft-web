<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A-Team</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="\obrázky\logo.png" alt=""Logo>
    <script src="script.js"></script>
</head>
<body>
    <div="sidebar">
<?php include 'sidebar.php';?>
</div>
<div class="main-content">
<?php include 'adminteam.php';?>
</div>
    </div>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</body>
</html>
<style>/* Resetování stylů */
/* Resetování stylů */
body, h1, h2 {
    margin: 0;
    padding: 0;
}

/* Společné styly pro role */
.team-container {
    text-align: center;
    margin: 20px;
}

.role {
    display: block;
    margin: 20px;
}

.role h1 {
    font-size: 28px;
    margin-bottom: 20px;
    color: #A1CEF8; /* Světle modrá */
}

.members-row {
    text-align: center;
    margin: 20px 0;
}
.member {
    text-align: center;
    margin: 10px;
    display: inline-block;
    width: 200px; /* Pevná šířka */
    height: 250px; /* Pevná výška */
    position: relative;
    overflow: hidden; /* Skryje přebytečný obsah, pokud by byl */
    z-index: 4
}
.member h2 {
    font-size: 24px;
    margin-bottom: 10px;
    color: #FFFFFF;
    display: block;
    padding: 5px 10px;
    border-radius: 5px;
    position: relative;
    z-index: 3;
    background-color: rgba(0, 0, 0, 0.7);

}
.member img {
    max-width: 100px;
    border-radius: 50%;
    display: block;
    margin: 0 auto;
    position: relative;
    z-index: 2;
}
.member::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%; /* Zabere 100% šířky rodiče (.member) */
    height: 100%; /* Zabere 100% výšky rodiče (.member) */
    background-color: #A1CEF8;
    opacity: 0.5;
    filter: blur(10px);
    border-radius: 5px;
    z-index: 1;
}

/* Barvy pro jednotlivé role */
.role.owner .member h2, .role.owner h1 { color: #FF0000; } /* Červená */
.role.manager .member h2, .role.manager h1 { color: #FFD700; } /* Zlatá */
.role.head-helper .member h2, .role.head-helper h1 { color: #FF69B4; } /* Světle růžová */
.role.head-builder .member h2, .role.head-builder h1 { color: #00DF9A; } /* Světle zelená */
.role.technician .member h2, .role.technician h1 { color: #800080; } /* Fialová */
.role.helper .member h2, .role.helper h1 { color: #008000; } /* Modrá */
.role.builder .member h2, .role.builder h1 { color: #0082FF; } /* Zelená */

/* Responzivní design */
@media screen and (max-width: 768px) {
    .member {
        flex-basis: calc(50% - 20px);
    }
}
.open-button {
  position: fixed;
  top: 20px;
  left: 20px;
  font-size: 30px;
  cursor: pointer;
  z-index: 1000;
}

.sidebar {
  width: 250px;
  height: 100%;
  background: #00FFB7;
  color: #FFFFFF;
  position: fixed;
  transition: 0.3s;
  z-index: 100;
}

.sidebar.open {
  left: 0;
  z-index: 101;
}
 
.member h2[title]:hover:after {
    content: attr(title);
    background-color: rgba(0, 0, 0, 0.7);
    color: #FFFFFF;
    font-size: 14px;
    padding: 5px 10px;
    border-radius: 5px;
    position: absolute;
    bottom: 100%;
    left: 50%;
    transform: translateX(-50%);
    white-space: nowrap;
    z-index: 5;
}
<style> 
        .member img:hover {
            transform: scale(1.2);
        }
        .member img {
            max-width: 100px;
            border-radius: 50%;
            cursor: pointer;
            transition: 0.5s;
        }
</style>    
