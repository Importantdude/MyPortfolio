<head>
    <?php
    include "../vendor/autoload.php"; // __DIR__ is the way to main directory
    // "../.." is get away to privoius directories two times

    ?>
    <link href="../css/styles.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../css/slick-theme.css"/>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="../js/slick.min.js"></script>
    <script>
        $(function () {
            $("#itemType").on("change", function () {
                $(".itemType").hide();
                switch ($(this).val()) {
                    case "DVD":
                        $("#typeDVD").show();
                        break;
                    case "Book":
                        $("#typeBook").show();
                        break;
                    case "Furniture":
                        $("#typeFurniture").show();
                        break;
                }
            })
        });
        $(function () {
            $("#change").on("change", function () {
                $(".change").hide();
                switch ($(this).val()) {
                    case "prod_List":
                        $("#prod_Appear").show();
                        break;
                    case "prod_add":
                        $("#prod_New").show();
                        break;
                }
            })
        });


        $(document).ready(function () {
            $('.sl').slick({
                arrows:false,
                dots:true,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
            });
        });

    </script>

</head>
