<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pravidla</title>
    <link rel="icon" type="image/x-icon" href="\obrázky\logo.png" alt=""Logo>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>

<?php include 'sidebar.php';?>

    <div class="content">
        <!--tady budem psat web lol-->
    </div>
    <style>
        body {
            background-color: #001f3f;
            color: #ffffff;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
            line-height: 1.6;
        }
        
        .sidebar {
            width: 250px;
            height: 100%;
            background-color: #00FFB7;
            color: #FFFFFF;
            position: fixed;
            transition: 0.3s;
            z-index: 2; /* Přidáno z-index pro umístění nad obsahem */
        }
        
        .Pravidla {
            background-color: #00985a;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 40px;
            border: 2px solid #ffffff;
            position: relative;
            overflow: hidden;
            display: inline-block;
            text-align: left;
        }
        
        .Pravidla a {
            font-size: 24px;
            color: #ffffff;
            text-decoration: none;
            display: block;
            margin-bottom: 20px;
        }

        @media screen and (max-width: 768px) {
            .Pravidla {
                margin-left: 10px;
                margin-right: 10px;
            }
        }

        .Pravidla::after {
            content: "";
            background-color: #00985a;
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            height: 20px;
        }

        .Pravidla:not(:last-child) {
            margin-bottom: 40px;
        }
    </style>
<body>
    <div class="Pravidla">
        <a>Pravidla</a>
        <a>A-team serveru lobbycraft si vyhrazuje právo udělit trest bez údání důvodu.<br>
        Pokud si myslíte že jste trest dostali neoprávněně obraťe se na vedení serveru.<br>
        Každý člen serveru lobbycraft se musí řídit těmito pravidly.<br>
        Také si vyhrazujeme právo změnit pravidla bez oznámení.<br>
        Tato pravidla platí na všech místech serveru lobbycraft.</a>
    </div>

    <div class="Pravidla">
        <a>Pravidla discordu</a>
        <a>1.Respektuj ostatní uživatele serveru. Jakékoliv formy utlačování nebo vysmívání (rasismus, sexismus, homofobie, nsfw atd.) zde nejsou tolerovány.<br>
        2.Užívání vulgarismů nebude tolerováno.<br>
        3.Veškerý obsah, který na našem serveru, jakkoliv zprostředkuješ nesmí porušovat morální zásady a rovněž tato pravidla.<br>
        4.Spamování, posílání velkého množství zpráv za sebou nebo neustále označování není povoleno.<br>
        5.Je zakázáno sdílet obsah (reklamu) za účelem dosažení jakéhokoliv zisku.<br>
        Jakýkoliv tento obsah bude bez varování smazán.<br>
        6.Každý uživatel se chová slušně a ohleduplně, aby nepoškozoval ostatní uživatele serveru.<br>
        7.Váš nickname, avatar, nesmí být urážlivý vůči určité osobě nebo skupině, popřípadě podporující násilí či pornografii.<br>
        8.Využívání cizí identity a vydávání se za jiné osoby je zakázáno!<br>
        9.Váš mikrofon nesmí obtěžovat ostatní uživatele.<br>
        10.Uživatel nesmí zneužívat svých pravomocí.<br>
        11.Je zakázáno obcházet bany</a>
    </div>

    <div class="Pravidla">
        <a>Pravidla minecraftu obecná</a>
        <a>1.Na serveru platí stejná pravidla jako na discordu.<br>
        2.Na serveru je zákaz jakýchkoliv podpůrných programů, cheatů, hacků a resource packů které vám dají výhodu nad hráči. Povolené jsou clienty jako lunar, feather, badlion.<br>
        3.Na serveru je zakázáno zneužívání jakýchkoliv bugů hráč má povinnost při nalezení bugu ho okamžitě nahlásit.<br>
        4.Je zakázáno stavění nevhodných staveb a staveb co lagují server.<br>
        5.Zákaz dělání čehokoliv co přímo ničí/laguje server.<br>
        6.Zákaz okrádání hráčů jakýmkoliv způsobem.<br>
        7.Zákaz tpa killování hráčů.<br>
        8.Zákaz používání více alt účtů.<br>
        9.Zákaz používání nějakého závaží na myš nebo podobných věcí pro vaše zvýhodnění.</a>
    </div>

    <div class="Pravidla">
        <a>Pravidla survivalu</a>
        <a>1.Na survivalu platí pravidla stejná jako na discordu a obecná v minecraftu.<br>
        2.Zákaz těžení na normálním světě. Můžete si něco natěžit ale nesmíte dělat nějaké velké těžení tento svět je primárně pro stavění. Pokud potřebujete více materiálu natěžte si ho na /mine nebo kupte na /shop<br>
        3.Zákaz griefing světa mimo svojí rezidenci. Griefingem je myšleno to že například ničíte přírodu nebo stavíte stavby mimo residenci.</a>
    </div>
</body>
</html>
