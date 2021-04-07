<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
        text-align: center;
        display: inline-block;
        width: 200px;
        }
        td{
            background-color: burlywood;
            border: 1px solid black;
        }
        th{
            border: 1px solid black;
        }
    </style>
    <?php

    class HtmlHelper{

        public $users = array();
        public $country = array();
        
        function print_table($users_){
            $this->users = $users_;
            foreach($users_ as $index => $user){
            echo
            '
            <table>
                <tr>
                    <th>'.$index.'</th>
                </tr
                <tr>
                    <td>'.$user.'</td>
                </tr>
            </table>
            ';
            }
        }
        function print_select($country_){
            $this->country = $country_;

            echo '<br> <select name="state">';
            foreach($country_ as $country){
                echo '<option value="CA">'. $country .'</option>';
            }
            echo '</select>';
        }
    }
    ?>

</head>
<body>
    <?php
    $h1 = new HtmlHelper();
    $h1->print_table((["first_name" => "Michael", "last_name" => "Choi", "nick_name" => "Sensei"]));

    $sample_array = array("CA", "WA", "UT", "TX", "AZ", "NY");
    $h1->print_select($sample_array);
    ?>
</body>
</html>