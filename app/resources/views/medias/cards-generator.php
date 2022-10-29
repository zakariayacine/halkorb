<?php
$card = array(
    array(
        "Transformation",
        "fa-wand-magic-sparkles",
        "Nos concepts de transformation en passant de l’acculturation de vos collaborateurs jusqu’à à la mesure de votre index de maturité digitale.",
        "link",
        "https://images.unsplash.com/photo-1597431842922-d9686a23baa6?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=800&ixid=MnwxfDB8MXxyYW5kb218MHx8fHx8fHx8MTY2NjA3OTQzNw&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1900"
    ),
    array(
        "Workplace",
        "fa-users",
        "Des solutions pour améliorer la productivité et faciliter la collaboration dans votre entreprise.",
        "link",
        "https://images.unsplash.com/photo-1597429926308-ffc8cd6f55fd?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=800&ixid=MnwxfDB8MXxyYW5kb218MHx8fHx8fHx8MTY2NjA3OTU2OQ&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1900"
    ),
    array(
        "Apps",
        "fa-window-restore",
        "Des technologies best-in-class, flexibles, mobiles pour collaborer, piloter vos activités et prendre des décisions informées.",
        "link",
        "https://images.unsplash.com/photo-1597431834637-9b1ec1df1b77?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=800&ixid=MnwxfDB8MXxyYW5kb218MHx8fHx8fHx8MTY2NjA3OTU0NQ&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1900"
    ),
    array(
        "Tech & Cloud",
        "fa-cloud-arrow-up",
        "Des solutions d’hébergement de données appropriées à votre taille d’entreprise, à vos moyens et besoins.",
        "link",
        "https://images.unsplash.com/photo-1606829192980-9a547ffc918c?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=800&ixid=MnwxfDB8MXxyYW5kb218MHx8fHx8fHx8MTY2NjA3OTUyMw&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1900"
    ),
    array(
        "Security",
        "fa-lock",
        "Votre capital de données est sécurisé et maintenu grâce à une expertise confirmée et des solutions robustes.",
        "link",
        "https://images.unsplash.com/photo-1597431783670-205a592f954e?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=800&ixid=MnwxfDB8MXxyYW5kb218MHx8fHx8fHx8MTY2NjA3OTQwNw&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1900"
        
    ),
    array(
        "Continuity",
        "fa-arrow-trend-up",
        "Des solutions de renommée mondiale pour valoriser vos données d’entreprise, gagner en mobilité et être paré à toute éventualité.",
        "link",
        "https://images.unsplash.com/photo-1612177241462-d254edf4e823?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=800&ixid=MnwxfDB8MXxyYW5kb218MHx8fHx8fHx8MTY2NjA3OTM1NA&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1900"
    ),
);
for ($i = 0; $i < count($card); $i++) {
    if ($i === 0) {
        echo "<div class=\"element pb-5 \" id=\"first\" style=\"background-image: url('".$card[$i][4]."');\">";
    } else {
        echo "<div class=\"element pb-5\" style=\"background-image: url('".$card[$i][4]."');\">";
    }
    if ($i === 1 || $i === 3 || $i === 5) {
        echo '<div class="layer" style="background-color: #445563b0">';
        echo '<div class="container mt-5 mb-5">';
        echo '<div class="row align-items-center text-center">';
        echo '<div class="col-md-1"></div>';

        echo "<div class=\"col-md-5 mt-5 mb-3\" style=\"filter: invert(1);\">";
        echo  "<div class=\" \">";
    } else {
        echo '<div class="layer" style="background-color: rgba(248, 247, 216, 0.7);">';
        echo '<div class="container mt-5 mb-5">';
        echo '<div class="row align-items-center text-center">';
        echo '<div class="col-md-1"></div>';
        echo "<div class=\"col-md-5 mt-5 mb-3\">";
        echo  "<div class=\"\">";
    }
    echo " <div class=\"\">";
    //fontawsoume
    echo '<div  class="mt-3 mb-4"><i class="fa-solid ' . $card[$i][1] . '" style="font-size: 80px;"></i></div>';
    //titel
    echo "<h3> Business Digital <br> <b> " . $card[$i][0] . "</b> </h3>";
    echo "<div class=\"mt-2\" style=\"height:150px\">";
    //text content
    echo $card[$i][2];
    echo "</div>";
    //button link
    echo "<hr><a href=\"" . $card[$i][3] . "\" class=\"btn btn-light btn-lg\"><strong>Découvrez ! <i class=\"fa-solid fa-arrow-right\"></i></strong><a>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo '<div class="col-md-5">';
    echo "<img src=\"img/medias/".$i.".svg\" height=\"350\">";
    echo "</div>";
    echo "</div>";

    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
}
