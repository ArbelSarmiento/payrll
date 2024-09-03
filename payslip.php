<?php
        $empname = $_POST['empname'];
        $tdofwork = $_POST['tdofwork'];
        $drate = $_POST['drate'];
        $cashadv = $_POST['cashadv'];

        $gross_pay = $tdofwork * $drate;

        $tax = $gross_pay * 0.05;
        $sss = $gross_pay * 0.02;
        $philhealth = $gross_pay * 0.03;
        $pagibig = 50;
        $cashadv = $cashadv;
        $total_deductions = $tax + $sss + $philhealth + $pagibig + $cashadv;
        $net_pay = $gross_pay - $total_deductions;

        echo "Employee Name: $empname";
        echo "<br><br>Daily Rate: $drate";
        echo "<br><br>Day of Work: $tdofwork";
        echo "<br><br>Gross Pay: $gross_pay";
        echo "<br><br>Deductions:";
        echo "<br><br>Tax: $tax";
        echo "<br><br>SSS: $sss";
        echo "<br><br>Philhealth: $philhealth";
        echo "<br><br>Pagibig: $pagibig";
        echo "<br><br>Cash Advance: $cashadv";
        echo "<br><br>Total Deductions: $total_deductions";
        echo "<br><br>Net Pay: $net_pay";
?>