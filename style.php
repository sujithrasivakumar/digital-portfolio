<?php
header("Content-Type: text/css");
?>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

/* CENTER PAGE */
body {
    min-height: 100vh;
    background: linear-gradient(135deg, #e0ecff, #ffffff);
    
    display: flex;
    justify-content: center;
    align-items: center;
}

/* 🔥 FIX FLEX ISSUE */
body, .box {
    display: flex;
    flex-direction: column;
    align-items: center;
}

form, .box {
    width: 100%;
    max-width: 360px;

    background: #ffffff;
    padding: 28px;

    border-radius: 15px;
    box-shadow: 0 10px 25px rgba(37, 99, 235, 0.25);

    display: flex;
    flex-direction: column;
    /* ❌ REMOVE align-items: center */
}
form:hover, .box:hover {
    transform: translateY(-2px);
    transition: 0.3s ease;
}

/* TITLE */
h2 {
    margin-bottom: 18px;   /* more space */
    text-align: center;
}

p {
    display: block;
    line-height: 1.6;
    margin: 8px 0;
}

/* 🔥 LABELS BLACK + BOLD */
p b {
    color: #000;
    font-weight: bold;
}

/* 🔥 ADD HERE */
input {
    width: 100%;
    padding: 10px;
    margin-bottom: 12px;

    border-radius: 6px;
    border: 1px solid #ccc;

    outline: none;
}

select {
    width: 100%;
    padding: 10px;
    margin-bottom: 12px;

    border-radius: 6px;
    border: 1px solid #ccc;
}

/* 🔥 ONLY SEAT DROPDOWN SMALL */
select[name="seat"] {
    width: 120px;
    padding: 7px;

    display: block;
    margin-left: auto;
    margin-right: auto;
}

/* ✨ LIGHT EFFECT */
input:focus, select:focus {
    border-color: #2563eb;
    box-shadow: 0 0 6px rgba(37, 99, 235, 0.4);
}

/* BUTTON */
button {
    width: 100%;
    padding: 12px;
    margin-top: 10px;   /* space above button */

    background: #2563eb;
    color: white;
    border: none;
    border-radius: 8px;
    transition: 0.2s;
}

/* BUTTON HOVER */
button:hover {
    background: #1e40af;
}

/* PAYMENT HEADINGS */
label {
    display: block;
    font-weight: bold;
    margin-top: 10px;
    margin-bottom: 5px;
}

/* PAYMENT BOX SPACING */
#upi, #card {
    margin-top: 10px;
}

/* LINK BELOW */
p a {
    display: inline-block;
    margin-top: 8px;
    text-align: center;
}
/* 🔥 ADMIN DASHBOARD LINKS */

a {
    display: block;
    margin: 8px 0;
    text-align: center;
    text-decoration: none;
    color: #2563eb;
    font-weight: 50;
}

/* 🔥 EXTRA CLEAN LOOK */
h3 {
    margin-top: 10px;
    margin-bottom: 10px;
    text-align: center;
}
/* 🔥 BIG PROFESSIONAL E-TICKET */
div[style*="dashed"] {
    width: 100%;
    max-width: 420px;   /* ✅ INCREASE SIZE */
    margin: 25px auto;

    padding: 25px !important;

    border: 2px dashed #2563eb;   /* ✅ blue border */
    border-radius: 12px;

    background: #f9fbff;          /* ✅ light bg */
    box-shadow: 0 8px 20px rgba(0,0,0,0.08);

    text-align: center;
}

/* 🔥 PRINT BUTTON FULL WIDTH */
button:last-of-type {
    width: 100%;
    padding: 12px;
    font-size: 14px;
    margin-top: 10px;
}
button:active {
    transform: scale(0.97);
}
/* 🔥 ADMIN ADD TICKET SMALL BOX ONLY */
.admin-form {
    width:100%;
    max-width: 360px;   /* smaller width */
    
    background: #ffffff;
    padding: 28px;

    border-radius: 15px;
    box-shadow: 0 10px 25px rgba(37, 99, 235, 0.25);

    display: flex;
    flex-direction: column;
    /* ❌ REMOVE align-items: center */
}

