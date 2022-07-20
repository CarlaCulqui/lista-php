<?php
        $no1 = $_POST['no1'];
        $no2 = $_POST['no2'];

        if ($no1 > $no2) {
            $maior1 = $no1;
            $menor1 = $no2;
            $maior2 = $no1;
            $menor2 = $no2;
        }
        else {
            $maior1 = $no2;
            $menor1 = $no1;
            $maior2 = $no2;
            $menor2 = $no1;
        }

        while ($menor2 < $maior2) {
            $menor2 = $menor2 + 1;
            echo "$menor2. ";
        }
