<?php
/*
===========================================================
 SAMSUNG STYLE INCENTIVE CALCULATOR
 Single File Version
 File: index.php
===========================================================
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Samsung Incentive Calculator</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

:root{
    --blue:#1428A0;
    --blue2:#0b1d73;
    --light:#f5f7fb;
    --white:#ffffff;
    --text:#172033;
    --muted:#6b7280;
    --border:#e2e6ef;
    --green:#16a34a;
    --red:#dc2626;
    --shadow:0 8px 30px rgba(20,40,160,.10);
}

body{
    background:var(--light);
    color:var(--text);
    min-height:100vh;
}

/* ================= CREATED BY ================= */

.created-by{
    background:#ffffff;
    color:#1428A0;
    font-size:15px;
    font-weight:700;
    padding:8px 0;
    border-bottom:1px solid #e2e6ef;
    letter-spacing:1px;
}

/* ================= HEADER ================= */

.header{
    height:75px;
    background:linear-gradient(135deg,var(--blue2),var(--blue));
    color:white;
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:0 30px;
    box-shadow:0 5px 20px rgba(0,0,0,.15);
}

.logo{
    font-size:27px;
    font-weight:800;
    letter-spacing:4px;
}

.header-title{
    font-size:19px;
    font-weight:600;
}

.header-actions{
    display:flex;
    gap:10px;
}

/* ================= BUTTONS ================= */

button{
    border:none;
    cursor:pointer;
    transition:.2s;
}

.btn{
    padding:11px 18px;
    border-radius:9px;
    font-weight:700;
}

.btn:hover{
    transform:translateY(-1px);
}

.btn-white{
    background:white;
    color:var(--blue);
}

.btn-blue{
    background:var(--blue);
    color:white;
}

.btn-green{
    background:var(--green);
    color:white;
}

.btn-red{
    background:var(--red);
    color:white;
}

.btn-dark{
    background:#111827;
    color:white;
}

/* ================= CONTAINER ================= */

.container{
    width:95%;
    max-width:1500px;
    margin:25px auto;
}

/* ================= CARDS ================= */

.summary{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:18px;
    margin-bottom:25px;
}

.card{
    background:white;
    border:1px solid var(--border);
    border-radius:16px;
    padding:20px;
    box-shadow:var(--shadow);
}

.card-label{
    color:var(--muted);
    font-size:13px;
    font-weight:600;
    margin-bottom:8px;
}

.card-value{
    font-size:28px;
    font-weight:800;
    color:var(--blue);
}

/* ================= FORM ================= */

.form-card{
    background:white;
    padding:22px;
    border-radius:16px;
    box-shadow:var(--shadow);
    border:1px solid var(--border);
    margin-bottom:20px;
}

.form-grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:15px;
}

.form-group label{
    display:block;
    font-size:13px;
    font-weight:700;
    margin-bottom:7px;
}

input,
select{
    width:100%;
    height:43px;
    border:1px solid #d7dce8;
    border-radius:8px;
    padding:0 12px;
    font-size:14px;
    outline:none;
    background:white;
}

input:focus,
select:focus{
    border-color:var(--blue);
    box-shadow:0 0 0 3px rgba(20,40,160,.08);
}

/* ================= SECTION TITLE ================= */

.section-head{
    display:flex;
    align-items:center;
    justify-content:space-between;
    margin-bottom:15px;
}

.section-title{
    font-size:20px;
    font-weight:800;
}

.section-buttons{
    display:flex;
    gap:8px;
}

/* ================= TABLE ================= */

.table-card{
    background:white;
    border-radius:16px;
    border:1px solid var(--border);
    box-shadow:var(--shadow);
    overflow:hidden;
}

.table-wrapper{
    width:100%;
    overflow-x:auto;
}

table{
    width:100%;
    border-collapse:collapse;
    min-width:900px;
}

thead{
    background:var(--blue);
    color:white;
}

th{
    padding:14px 12px;
    text-align:center;
    font-size:13px;
    white-space:nowrap;
}

td{
    padding:10px;
    text-align:center;
    border-bottom:1px solid var(--border);
    font-size:14px;
}

tbody tr:hover{
    background:#f8faff;
}

.model-name{
    font-weight:700;
    text-align:left;
}

.qty-input{
    width:90px;
    text-align:center;
}

.incentive-input{
    width:130px;
    text-align:right;
}

.final-value{
    font-weight:800;
    color:var(--green);
    font-size:15px;
}

.remove-btn{
    width:34px;
    height:34px;
    border-radius:7px;
    background:#fee2e2;
    color:var(--red);
    font-weight:bold;
}

.remove-btn:hover{
    background:var(--red);
    color:white;
}

/* ================= TOTAL ================= */

.total-row{
    background:#eef2ff;
}

.total-row td{
    font-weight:800;
    font-size:16px;
    color:var(--blue);
}

/* ================= MASTER ================= */

.master-section{
    margin-top:25px;
}

.master-card{
    background:white;
    border-radius:16px;
    border:1px solid var(--border);
    box-shadow:var(--shadow);
    overflow:hidden;
}

.master-toolbar{
    padding:18px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:15px;
    border-bottom:1px solid var(--border);
}

.master-search{
    max-width:350px;
}

.master-table input{
    width:130px;
    text-align:right;
}

.hidden{
    display:none !important;
}

/* ================= FOOTER ================= */

.footer{
    text-align:center;
    padding:30px;
    color:var(--muted);
    font-size:13px;
}

/* ================= DARK MODE ================= */

.dark{
    --light:#0b1020;
    --white:#111827;
    --text:#f3f4f6;
    --muted:#9ca3af;
    --border:#263044;
}

.dark input,
.dark select{
    background:#111827;
    color:white;
    border-color:#374151;
}

.dark .table-card,
.dark .form-card,
.dark .card,
.dark .master-card{
    background:#111827;
}

.dark tbody tr:hover{
    background:#172033;
}

.dark .total-row{
    background:#172554;
}

/* ================= TOAST ================= */

.toast{
    position:fixed;
    right:25px;
    bottom:25px;
    background:#111827;
    color:white;
    padding:14px 20px;
    border-radius:10px;
    box-shadow:0 10px 30px rgba(0,0,0,.25);
    opacity:0;
    transform:translateY(20px);
    pointer-events:none;
    transition:.3s;
    z-index:9999;
}

.toast.show{
    opacity:1;
    transform:translateY(0);
}

/* ================= RESPONSIVE ================= */

@media(max-width:1000px){
    .summary{
        grid-template-columns:repeat(2,1fr);
    }

    .form-grid{
        grid-template-columns:repeat(2,1fr);
    }

    .header-title{
        display:none;
    }
}

@media(max-width:600px){
    .header{
        padding:0 15px;
    }

    .logo{
        font-size:21px;
    }

    .container{
        width:94%;
    }

    .summary{
        grid-template-columns:1fr 1fr;
        gap:10px;
    }

    .card{
        padding:15px;
    }

    .card-value{
        font-size:21px;
    }

    .form-grid{
        grid-template-columns:1fr;
    }

    .section-head{
        align-items:flex-start;
        flex-direction:column;
    }

    .header-actions .btn{
        padding:8px 10px;
        font-size:12px;
    }
}

/* ================= PRINT ================= */

@media print{

    body{
        background:white;
    }

    .created-by{
        color:black;
        border-bottom:1px solid #000;
    }

    .header{
        background:white;
        color:black;
        box-shadow:none;
        border-bottom:2px solid #000;
    }

    .header-actions,
    .section-buttons,
    .master-section,
    .remove-btn,
    .footer{
        display:none !important;
    }

    .container{
        width:100%;
        margin:0;
    }

    .card,
    .form-card,
    .table-card{
        box-shadow:none;
        border:1px solid #ddd;
    }

    table{
        min-width:0;
    }

    th{
        background:#ddd !important;
        color:black !important;
    }

    input,
    select{
        border:none;
        background:white;
    }
}
</style>
</head>

<body>

<!-- ================= CREATED BY ================= -->

<div class="created-by">
    <marquee behavior="scroll" direction="left">
        Created by Vaibhav Zambare
    </marquee>
</div>


<!-- ================= HEADER ================= -->

<header class="header">

    <div class="logo">SAMSUNG</div>

    <div class="header-title">
        INCENTIVE CALCULATOR
    </div>

    <div class="header-actions">

        <button
            class="btn btn-white"
            onclick="toggleDarkMode()">
            🌙
        </button>

        <button
            class="btn btn-white"
            onclick="window.print()">
            🖨 PRINT
        </button>

    </div>

</header>


<div class="container">

    <!-- ================= SUMMARY ================= -->

    <div class="summary">

        <div class="card">

            <div class="card-label">
                TOTAL MODELS
            </div>

            <div class="card-value"
                 id="totalModels">
                0
            </div>

        </div>


        <div class="card">

            <div class="card-label">
                TOTAL QUANTITY
            </div>

            <div class="card-value"
                 id="totalQty">
                0
            </div>

        </div>


        <div class="card">

            <div class="card-label">
                TOTAL INCENTIVE
            </div>

            <div class="card-value"
                 id="totalIncentive">
                ₹0
            </div>

        </div>


        <div class="card">

            <div class="card-label">
                CALCULATION DATE
            </div>

            <div class="card-value"
                 style="font-size:18px"
                 id="displayDate">
                --
            </div>

        </div>

    </div>


    <!-- ================= EMPLOYEE FORM ================= -->

    <div class="form-card">

        <div class="form-grid">

            <div class="form-group">

                <label>
                    Employee Name
                </label>

                <input
                    type="text"
                    id="employeeName"
                    placeholder="Enter employee name">

            </div>


            <div class="form-group">

                <label>
                    Store / Branch
                </label>

                <input
                    type="text"
                    id="storeName"
                    placeholder="Enter store name">

            </div>


            <div class="form-group">

                <label>
                    Month
                </label>

                <input
                    type="month"
                    id="month">

            </div>


            <div class="form-group">

                <label>
                    Calculation Date
                </label>

                <input
                    type="date"
                    id="calcDate">

            </div>

        </div>

    </div>


    <!-- ================= CALCULATOR ================= -->

    <div class="section-head">

        <div class="section-title">
            📊 Incentive Calculation
        </div>


        <div class="section-buttons">

            <button
                class="btn btn-blue"
                onclick="addRow()">
                + ADD MODEL
            </button>


            <button
                class="btn btn-green"
                onclick="saveCalculation()">
                💾 SAVE
            </button>


            <button
                class="btn btn-dark"
                onclick="exportCSV()">
                📥 EXCEL
            </button>


            <button
                class="btn btn-red"
                onclick="resetCalculation()">
                RESET
            </button>

        </div>

    </div>


    <div class="table-card">

        <div class="table-wrapper">

            <table id="calculationTable">

                <thead>

                    <tr>

                        <th>
                            SR NO
                        </th>

                        <th>
                            MODEL
                        </th>

                        <th>
                            QTY
                        </th>

                        <th>
                            MODEL WISE INCENTIVE
                        </th>

                        <th>
                            FINAL INCENTIVE
                        </th>

                        <th>
                            ACTION
                        </th>

                    </tr>

                </thead>


                <tbody id="calculationBody">
                </tbody>


                <tfoot>

                    <tr class="total-row">

                        <td colspan="2">
                            GRAND TOTAL
                        </td>

                        <td id="footerQty">
                            0
                        </td>

                        <td>
                            -
                        </td>

                        <td id="footerTotal">
                            ₹0
                        </td>

                        <td>
                            -
                        </td>

                    </tr>

                </tfoot>

            </table>

        </div>

    </div>


    <!-- ================= MODEL MASTER ================= -->

    <div class="master-section">

        <div class="section-head">

            <div class="section-title">
                ⚙ Model Incentive Master
            </div>


            <div class="section-buttons">

                <button
                    class="btn btn-blue"
                    onclick="toggleMaster()">
                    ✏ EDIT INCENTIVE
                </button>


                <button
                    class="btn btn-green hidden"
                    id="saveMasterBtn"
                    onclick="saveMaster()">
                    💾 SAVE RATES
                </button>

            </div>

        </div>


        <div class="master-card hidden"
             id="masterCard">

            <div class="master-toolbar">

                <div>
                    <strong>
                        Model Wise Incentive
                    </strong>
                </div>


                <input
                    class="master-search"
                    type="text"
                    id="masterSearch"
                    placeholder="Search model..."
                    onkeyup="searchMaster()">

            </div>


            <div class="table-wrapper">

                <table class="master-table">

                    <thead>

                        <tr>

                            <th>
                                SR NO
                            </th>

                            <th>
                                MODEL
                            </th>

                            <th>
                                INCENTIVE / UNIT
                            </th>

                        </tr>

                    </thead>


                    <tbody id="masterBody">
                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>


<div class="footer">

    Samsung Incentive Calculator
    • Model Wise Incentive Management

</div>


<div class="toast" id="toast">
    Saved Successfully
</div>


<script>

/* =========================================================
   MODEL MASTER
========================================================= */

const models = [

    "FOLD8 ULTRA",
    "FOLD8",
    "FLIP8",
    "FOLD7",
    "S26 ULTRA",
    "S26+",
    "S26",
    "S25 ULTRA",
    "S25 Edge",
    "S25",
    "S25 FE",
    "A57",
    "A37",
    "A27",
    "A36",
    "A26",
    "A17",
    "A07 5G",
    "F17",
    "NPC",
    "TABLETS",
    "WEARABLES",
    "Grand Total",
    "Protect Max",
    "Total"

];


/* =========================================================
   DEFAULT INCENTIVE RATES
========================================================= */

let rates = {

    "FOLD8 ULTRA":5000,
    "FOLD8":4000,
    "FLIP8":3000,
    "FOLD7":2500,

    "S26 ULTRA":2500,
    "S26+":1800,
    "S26":1500,

    "S25 ULTRA":2000,
    "S25 Edge":1500,
    "S25":1000,
    "S25 FE":800,

    "A57":500,
    "A37":450,
    "A27":400,
    "A36":350,
    "A26":300,
    "A17":250,
    "A07 5G":200,

    "F17":250,

    "NPC":0,
    "TABLETS":500,
    "WEARABLES":300,

    "Grand Total":0,
    "Protect Max":0,
    "Total":0

};


/* =========================================================
   LOAD SAVED RATES
========================================================= */

const savedRates =
    localStorage.getItem(
        "samsung_incentive_rates"
    );


if(savedRates){

    try{

        rates = JSON.parse(savedRates);

    }
    catch(error){

        console.log(
            "Rates loading error"
        );

    }

}


/* =========================================================
   INITIALIZATION
========================================================= */

document.addEventListener(
    "DOMContentLoaded",
    function(){

        const today = new Date();


        document.getElementById(
            "calcDate"
        ).value =
            today.toISOString()
            .split("T")[0];


        document.getElementById(
            "displayDate"
        ).innerText =
            today.toLocaleDateString(
                "en-IN"
            );


        document.getElementById(
            "month"
        ).value =
            today.toISOString()
            .slice(0,7);


        renderMaster();

        addRow();

        calculate();

    }
);


/* =========================================================
   ADD CALCULATION ROW
========================================================= */

function addRow(){

    const tbody =
        document.getElementById(
            "calculationBody"
        );


    const tr =
        document.createElement("tr");


    tr.innerHTML = `

        <td class="sr"></td>

        <td>

            <select
                class="model-select"
                onchange="modelChanged(this)">

                <option value="">
                    Select Model
                </option>

                ${models.map(model => `

                    <option value="${model}">
                        ${model}
                    </option>

                `).join("")}

            </select>

        </td>


        <td>

            <input
                type="number"
                min="0"
                value="0"
                class="qty-input"
                oninput="calculate()">

        </td>


        <td>

            <input
                type="number"
                min="0"
                value="0"
                class="incentive-input"
                oninput="calculate()">

        </td>


        <td class="final-value">
            ₹0
        </td>


        <td>

            <button
                class="remove-btn"
                onclick="removeRow(this)">
                ×
            </button>

        </td>

    `;


    tbody.appendChild(tr);

    updateSerialNumbers();

}


/* =========================================================
   MODEL CHANGE
========================================================= */

function modelChanged(select){

    const row =
        select.closest("tr");


    const incentiveInput =
        row.querySelector(
            ".incentive-input"
        );


    const model =
        select.value;


    if(model){

        incentiveInput.value =
            rates[model] ?? 0;

    }
    else{

        incentiveInput.value = 0;

    }


    calculate();

}


/* =========================================================
   REMOVE ROW
========================================================= */

function removeRow(button){

    const tbody =
        document.getElementById(
            "calculationBody"
        );


    if(tbody.children.length <= 1){

        showToast(
            "At least one row is required"
        );

        return;

    }


    button
        .closest("tr")
        .remove();


    updateSerialNumbers();

    calculate();

}


/* =========================================================
   SERIAL NUMBERS
========================================================= */

function updateSerialNumbers(){

    document
        .querySelectorAll(
            "#calculationBody tr"
        )
        .forEach(
            (row,index)=>{

                row.querySelector(
                    ".sr"
                ).innerText =
                    index + 1;

            }
        );

}


/* =========================================================
   CALCULATE
========================================================= */

function calculate(){

    let totalQty = 0;

    let totalIncentive = 0;

    let modelCount = 0;


    document
        .querySelectorAll(
            "#calculationBody tr"
        )
        .forEach(
            row=>{

                const model =
                    row.querySelector(
                        ".model-select"
                    ).value;


                const qty =
                    parseFloat(
                        row.querySelector(
                            ".qty-input"
                        ).value
                    ) || 0;


                const incentive =
                    parseFloat(
                        row.querySelector(
                            ".incentive-input"
                        ).value
                    ) || 0;


                const finalValue =
                    qty * incentive;


                row.querySelector(
                    ".final-value"
                ).innerText =
                    formatCurrency(
                        finalValue
                    );


                if(
                    model &&
                    qty > 0
                ){

                    modelCount++;

                }


                totalQty += qty;

                totalIncentive +=
                    finalValue;

            }
        );


    document.getElementById(
        "totalModels"
    ).innerText =
        modelCount;


    document.getElementById(
        "totalQty"
    ).innerText =
        totalQty;


    document.getElementById(
        "totalIncentive"
    ).innerText =
        formatCurrency(
            totalIncentive
        );


    document.getElementById(
        "footerQty"
    ).innerText =
        totalQty;


    document.getElementById(
        "footerTotal"
    ).innerText =
        formatCurrency(
            totalIncentive
        );

}


/* =========================================================
   CURRENCY
========================================================= */

function formatCurrency(value){

    return "₹" +
        Number(value)
        .toLocaleString(
            "en-IN",
            {
                maximumFractionDigits:0
            }
        );

}


/* =========================================================
   MASTER TABLE
========================================================= */

function renderMaster(){

    const tbody =
        document.getElementById(
            "masterBody"
        );


    tbody.innerHTML = "";


    models.forEach(
        (model,index)=>{

            const tr =
                document.createElement(
                    "tr"
                );


            tr.setAttribute(
                "data-model",
                model.toLowerCase()
            );


            tr.innerHTML = `

                <td>
                    ${index + 1}
                </td>


                <td class="model-name">
                    ${model}
                </td>


                <td>

                    <input
                        type="number"
                        min="0"
                        value="${rates[model] ?? 0}"
                        data-rate-model="${model}"
                        disabled>

                </td>

            `;


            tbody.appendChild(tr);

        }
    );

}


/* =========================================================
   EDIT MASTER
========================================================= */

function toggleMaster(){

    const card =
        document.getElementById(
            "masterCard"
        );


    const saveButton =
        document.getElementById(
            "saveMasterBtn"
        );


    card.classList.toggle(
        "hidden"
    );


    saveButton.classList.toggle(
        "hidden"
    );


    document
        .querySelectorAll(
            "[data-rate-model]"
        )
        .forEach(
            input=>{

                input.disabled =
                    card.classList.contains(
                        "hidden"
                    );

            }
        );

}


/* =========================================================
   SAVE MASTER
========================================================= */

function saveMaster(){

    document
        .querySelectorAll(
            "[data-rate-model]"
        )
        .forEach(
            input=>{

                const model =
                    input.dataset.rateModel;


                rates[model] =
                    parseFloat(
                        input.value
                    ) || 0;

            }
        );


    localStorage.setItem(
        "samsung_incentive_rates",
        JSON.stringify(rates)
    );


    showToast(
        "Incentive rates saved successfully"
    );


    calculate();

}


/* =========================================================
   SEARCH MASTER
========================================================= */

function searchMaster(){

    const search =
        document
        .getElementById(
            "masterSearch"
        )
        .value
        .toLowerCase();


    document
        .querySelectorAll(
            "#masterBody tr"
        )
        .forEach(
            row=>{

                const model =
                    row.dataset.model;


                row.style.display =
                    model.includes(search)
                    ? ""
                    : "none";

            }
        );

}


/* =========================================================
   SAVE CALCULATION
========================================================= */

function saveCalculation(){

    calculate();


    const data = {

        employee:
            document.getElementById(
                "employeeName"
            ).value,

        store:
            document.getElementById(
                "storeName"
            ).value,

        month:
            document.getElementById(
                "month"
            ).value,

        date:
            document.getElementById(
                "calcDate"
            ).value,

        rows: []

    };


    document
        .querySelectorAll(
            "#calculationBody tr"
        )
        .forEach(
            row=>{

                const model =
                    row.querySelector(
                        ".model-select"
                    ).value;


                const qty =
                    parseFloat(
                        row.querySelector(
                            ".qty-input"
                        ).value
                    ) || 0;


                const incentive =
                    parseFloat(
                        row.querySelector(
                            ".incentive-input"
                        ).value
                    ) || 0;


                if(model){

                    data.rows.push({

                        model:model,

                        qty:qty,

                        incentive:incentive,

                        final:
                            qty * incentive

                    });

                }

            }
        );


    localStorage.setItem(
        "last_incentive_calculation",
        JSON.stringify(data)
    );


    showToast(
        "Calculation saved successfully"
    );

}


/* =========================================================
   RESET
========================================================= */

function resetCalculation(){

    if(
        !confirm(
            "Are you sure you want to reset calculation?"
        )
    ){

        return;

    }


    document.getElementById(
        "employeeName"
    ).value = "";


    document.getElementById(
        "storeName"
    ).value = "";


    const tbody =
        document.getElementById(
            "calculationBody"
        );


    tbody.innerHTML = "";


    addRow();

    calculate();


    showToast(
        "Calculation reset"
    );

}


/* =========================================================
   EXPORT CSV / EXCEL
========================================================= */

function exportCSV(){

    let csv =
        "SR NO,MODEL,QTY,MODEL WISE INCENTIVE,FINAL INCENTIVE\n";


    document
        .querySelectorAll(
            "#calculationBody tr"
        )
        .forEach(
            (row,index)=>{

                const model =
                    row.querySelector(
                        ".model-select"
                    ).value;


                const qty =
                    row.querySelector(
                        ".qty-input"
                    ).value;


                const incentive =
                    row.querySelector(
                        ".incentive-input"
                    ).value;


                const finalValue =
                    (
                        parseFloat(qty)||0
                    ) *
                    (
                        parseFloat(incentive)||0
                    );


                if(model){

                    csv +=
                        `${index+1},"${model}",${qty},${incentive},${finalValue}\n`;

                }

            }
        );


    const rows =
        document.querySelectorAll(
            "#calculationBody tr"
        );


    let total = 0;


    rows.forEach(
        row=>{

            const qty =
                parseFloat(
                    row.querySelector(
                        ".qty-input"
                    ).value
                ) || 0;


            const incentive =
                parseFloat(
                    row.querySelector(
                        ".incentive-input"
                    ).value
                ) || 0;


            total +=
                qty * incentive;

        }
    );


    csv +=
        `\n,,,GRAND TOTAL,${total}`;


    const blob =
        new Blob(
            [csv],
            {
                type:
                "text/csv;charset=utf-8;"
            }
        );


    const url =
        URL.createObjectURL(
            blob
        );


    const link =
        document.createElement(
            "a"
        );


    link.href = url;


    link.download =
        "Samsung_Incentive_Report.csv";


    link.click();


    URL.revokeObjectURL(
        url
    );


    showToast(
        "Excel file exported"
    );

}


/* =========================================================
   DARK MODE
========================================================= */

function toggleDarkMode(){

    document.body.classList.toggle(
        "dark"
    );


    localStorage.setItem(
        "dark_mode",
        document.body.classList.contains(
            "dark"
        )
    );

}


/* =========================================================
   LOAD DARK MODE
========================================================= */

if(
    localStorage.getItem(
        "dark_mode"
    ) === "true"
){

    document.body.classList.add(
        "dark"
    );

}


/* =========================================================
   TOAST
========================================================= */

function showToast(message){

    const toast =
        document.getElementById(
            "toast"
        );


    toast.innerText =
        message;


    toast.classList.add(
        "show"
    );


    setTimeout(
        ()=>{

            toast.classList.remove(
                "show"
            );

        },
        2500
    );

}

</script>

</body>
</html>