<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
    body {
	 font:normal 100% "Trebuchet MS", "Lucida Sans Unicode", sans-serif;
}


h2 {
text-transform: none;
font-weight: normal;
font-size: 3em;
line-height: 1em;
margin-bottom: 0;
font-family: 'CabinSketchRegular';
color: #AF3225;
}

h3 {
text-transform: none;
font-weight: normal;
font-size: 1.2em;
line-height: 1em;
margin-bottom: 10px;
color: #AF3225;
clear:both;
background: url("../images/redsmallexpanded.gif") no-repeat scroll 0px 30% transparent;
padding-left: 15px;
float:left;
width:100%
}

.node-fiche-indicateur .field-name-field-intitule-court
{
margin-bottom: 35px;
font-style: italic;
}

.node-fiche-indicateur .field-name-field-actu-date
{
float:right;
font-style: italic;
font-size:0.9em;
margin-top: -32px;
}

.node-fiche-indicateur .field-name-field-actu-date .date-display-single
{
font-size:0.9em;
}

.node-fiche-indicateur .field-name-field-actu-date .field-label
{
font-weight:normal;
margin-right:2px;
}

.node-fiche-indicateur .group-enbref-impression
{
background-color:#F6F6F2;
margin-top:20px;
font-size:0.9em;
color:#333;
page-break-after:always ;
}


/*.node-fiche-indicateur .group-enbref-impression .field
{
width:33%;
float:left;
}
 */

.node-fiche-indicateur .group-enbref-impression .field-label
{
color:#AF3225;
font-weight:normal;
}

.node-fiche-indicateur .field-name-field-visuels
{
text-align:center;
}

.node-fiche-indicateur .field-name-field-visuels img
{
width:80%;
height:80%;
}

.print-content #node_fiche_indicateur_print_group_enbref_impression,
/*#node_fiche_indicateur_print_group_presentation,*/
/*.print-content #node_fiche_indicateur_print_group_production,*/
.node-fiche-indicateur .field-group-format.group-enbref-impression,
.node-fiche-indicateur .field-group-format.group_presentation,
/*.node-fiche-indicateur .field-group-format.group_definition,*/
.node-fiche-indicateur .field-group-format.group_production
/*.node-fiche-indicateur .field-group-format.group_analyse,*/
/*.node-fiche-indicateur .field-group-format.group_pistes_groupe*/

{
page-break-after:always ;
}

.print-content #node_fiche_indicateur_print_group_definition,
.print-content #node_fiche_indicateur_print_group_production
{
page-break-inside:never;
}

.print-content #node_fiche_indicateur_print_group_analyse
{
page-break-after:never ;
}

.node-fiche-indicateur p{
 margin-bottom: 0px;
 margin-top:0px;
-webkit-margin-before: 0em;
-webkit-margin-after: 0em;
-webkit-margin-start: 0px;
-webkit-margin-end: 0px;
 }

.node-fiche-indicateur .field-collection-item-field-valeurannee
{
color:#096B00;
font-size: 1.8em;
font-family: 'CabinSketchRegular';
margin-bottom:20px;
line-height: 1.2em;
}

.node-fiche-indicateur .field-name-field-mod-interpretation
{
clear:both;
}

.node-fiche-indicateur .group-definition .field-label,
.node-fiche-indicateur .group-production .field-label,
.node-fiche-indicateur .group-analyse .field-label,
.node-fiche-indicateur .group-pistes-groupe .field-label
{
width:40%;
float:left;
}

.node-fiche-indicateur .group-definition .field-items,
.node-fiche-indicateur .group-production .field-items,
.node-fiche-indicateur .group-analyse .field-items,
.node-fiche-indicateur .group-pistes-groupe .field-items
{
width:60%;
float:right;
}


.node-fiche-indicateur .group-definition .field,
.node-fiche-indicateur .group-production .field,
.node-fiche-indicateur .group-analyse .field,
.node-fiche-indicateur .group-pistes-groupe .field
{
clear:both;
border-bottom: 1px dotted #CCCCCC;
}

.group-analyse-frb,
.field-name-field-analyse-frb
{
clear:both;
}



/*Questions*/
.node-question .field-name-field-questionvisuel img
{
width:100%;
height:auto;
}

.node-question .field-name-field-objets-indicateurs
{
page-break-inside:avoid;
}

.node-question .field-name-field-sousquestion-indic-visuels img
{
width:80%;
height:80%;
}

.node-question .field-name-field-sousquestion .field-collection-item-field-sousquestion
{
page-break-before:always ;
}

.node-question .field-name-field-sousquestion-titre {
    background-color: #AF3225;
    background-image: url("../images/pucesousquestion.png");
    background-position: left center;
    background-repeat: no-repeat;
    color: #FFFFFF;
    display: inline-block;
    font-size: 1.2em;
    font-weight: normal;
    margin-bottom: 5px;
    padding: 1px 6px 1px 12px;
    text-decoration: none;
    text-transform: uppercase;
}
.node-question .field-name-field-sousquestion-indicateur .Zoom, .node-question .field-name-field-sousquestion-indicateur .zoom .group-header {
    background-image: url("../images/zoom.png");
    background-repeat: no-repeat;
    color: #8DC500;
    font-weight: bold;
    height: 60px;
    padding-left: 40px;
    padding-top: 35px;
    position: relative;
    z-index: 1;
}

.node-question .field-name-field-sousquestion-indic-visuels
{
text-align:center;
}

.node-question .field-name-field-presentation .field-label, .node-question .field-name-field-objets-indicateurs .field-label {
color: #8dc500;
font-size: 1.2em;
font-weight: bold;
text-decoration: none;
border-left: 10px #8DC300 solid;
padding-left: 5px;
line-height: 1.2em;
height: 40px;
text-transform: uppercase;
letter-spacing: 0px;
}

.node-question .field-name-field-presentation .field-items, .node-question .field-name-field-objets-indicateurs .field-items {
text-indent: 20px;
margin-top: -20px;
}


.node-question .field-name-field-sousquestion-indicateur .Zoom, .node-question .field-name-field-sousquestion-indicateur .zoom .group-header {
background-image: url("../images/zoom.png");
background-repeat: no-repeat;
height: 60px;
padding-left: 40px;
padding-top: 35px;
z-index: 1;
/*position: relative;*/
color: #8DC500;
font-weight: bold;
}

.node-question .field-name-field-sousquestion-indicateur .Zoom .group-center, .node-question .field-name-field-sousquestion-indicateur .zoom .group-center {
margin-top: -40px;
padding-top: 20px;
width: 100%;
z-index: 0;
position: relative;
float: left;
}

.node-question .group-left {
padding-left: 0px;
width: 100%;
}

.node-question .field-name-field-sousquestion-indicateur .Zoom .group-center .group-right,
.node-question .field-name-field-sousquestion-indicateur .zoom .group-center .group-right {
display:none;
}

.node-question .field-name-field-sousquestion-indic-nom h2 {
font-size: 1.1em;
margin-bottom: 0px;
color: #000;
text-transform: uppercase;
font-weight: bold;
background-image: url("../images/arrow.png");
background-repeat: no-repeat;
padding-left: 18px;
background-position: left 2px;
font-family:"Trebuchet MS", "Lucida Sans Unicode", sans-serif;
}

.node-question .node-fiche-indicateur .field-name-field-valeurannee .field-name-field-valeur{
color: #096B00;
font-size: 1.1em;
font-weight: normal;
line-height: 1em;
margin-top: 10px;
margin-bottom: 3px;
font-family: 'CabinSketchRegular';
}

.node-question .field-name-field-sousquestion-indicateur .Zoom .group-center,
.node-question .field-name-field-sousquestion-indicateur .zoom .group-center,
.node-question .field-name-field-sousquestion-indicateur .Zoom .group-footer,
.node-question .field-name-field-sousquestion-indicateur .zoom .group-footer {
background-color: #e6eeca;
}

.node-question .group-footer {
clear: both;
font-style:normal;
}

.node-question .cite.field-collection-item-field-sousquestion-indicateur,
.node-question .presente.field-collection-item-field-sousquestion-indicateur
{
/*page-break-inside: avoid;*/
border:1px dotted #ccc;
margin-bottom:20px;
padding: 1em;
}

/*.node-question .field-item{
page-break-inside: avoid;
}

/*.node-question .presente.field-name-field-sousquestion-indicateur,*/
.node-question .zoom.field-collection-item-field-sousquestion-indicateur
{
clear: both;
padding:1em;
border: none;
page-break-inside: avoid;
margin-bottom:20px;
}

/*Tableau indicateurs*/
.page-indicateurs-export-tableau1
{
width:80%;
}

.page-indicateurs-export-tableau1 #region-branding
{
width:80%;
height:80%;
}

.view-recherche-indicateurs.view-display-id-tableau1 .odd,
.view-recherche-indicateurs.view-display-id-tableau1 .even,
.view-recherche-indicateurs.view-display-id-tableau1 .views-field-field-collecvisuels,
.view-recherche-indicateurs.view-display-id-tableau1 .views-field-nothing
{
page-break-inside: avoid;
}

.page-indicateurs-export-tableau1 #section-footer
{
display:none;
}

.page-indicateurs-export-tableau1 p {page-break-inside:avoid;}

.page-indicateurs-export-tableau1 thead {
    display:table-header-group;
}
.page-indicateurs-export-tableau1 tbody {
    display:table-row-group;
}

.page-indicateurs-export-tableau1 tr {page-break-inside: avoid;}



    
    </style>
  </head>
  <body>
    <table>
    <?php print $header_row; ?>
    <tbody>
