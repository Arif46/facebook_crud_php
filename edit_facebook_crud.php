<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=db_facebook", "root", "");
      $create_id=$_GET['create_id'];
      $sql="SELECT *  FROM  tbl_facebook WHERE create_id=:sid";
       $data=$conn->prepare($sql);
       $data->bindParam(":sid", $create_id);
       $data->execute();
         $row=$data->fetch(PDO::FETCH_ASSOC);
         
       if(isset($_POST['btn'])){
             $frist_name=$_POST['frist_name'];
          $sur_name=$_POST['sur_name'];
          $mobile_number=$_POST['mobile_number'];
           $address=$_POST['address'];
           
           $sql="UPDATE tbl_facebook SET frist_name=:fname,sur_name=:sname,mobile_number=:mnumber,address=:address WHERE create_id=:sid";
           $data=$conn->prepare($sql);
           $data->bindParam(":fname", $frist_name);
           $data->bindParam(":sname", $sur_name);
           $data->bindParam(":mnumber", $mobile_number);
           $data->bindParam(":address", $address);
          $data->bindParam(":sid", $create_id);
            $data->execute();
            header("location:view_facebook_account.php");
           
       } 
       
      
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Facebook account</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="style/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <section class="m-auto d-block" style="margin-bottom: 10px ">
            <div class="container-fluid ">
                <div class="col-12">
                    <nav class="navbar ">
                        <h3 style="margin-left: 150px;color: white;font-size: 50px">facebook</h3>
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" style="color: white">Email or Phone</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4" style="color:white">Password</label>
                                    <input type="password" class="form-control" id="inputPassword4" required placeholder="Password">
                                </div>
                            </div>
                        </form>
                    </nav>
                </div>
            </div>
        </section>
        <section class="d-block mr-auto">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="bg_text">
                            <h4>Facebook helps you connect and share with the people in your life.</h4>
                            <img class="img" src="https://static.xx.fbcdn.net/rsrc.php/v3/yc/r/GwFs3_KxNjS.png" alt="" width="537" height="195">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header">
                            <h2 style="margin-left: 90px;margin-top: 30px">Create a new  account</h2>
                            <p style="margin-left: 120px">it's free and always will be</p>
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="name"  value="<?php echo $row['frist_name']?>"  name="frist_name"   required class="form-control" placeholder="First name">
                                        <input type="hidden" name="create_id"  value="<?php echo $row['create_id']?>"  name="frist_name"   required class="form-control" placeholder="First name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="name" name="sur_name" value="<?php echo $row['sur_name']?>" class="form-control" placeholder="surname">
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="name">
                                            <input type="text" name="mobile_number" value="<?php echo $row['mobile_number']?>" class="form-control" placeholder="Mobile number or email address">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="address">
                                            <input type="name" name="address" value="<?php echo $row['address']?>" class="form-control" placeholder="present address">
                                        </div>
                                    </div>
                                </div>


                                <div class="date">
                                    <span class="_5k_4" data-type="selectors" data-name="birthday_wrapper" id="u_0_11">
                                        <span><select aria-label="Day" name="birthday_day" id="day" title="Day" class="_5dba">
                                                <option value="0">Day</option><option value="1">1</option>
                                                <option value="2">2</option><option value="3">3</option>
                                                <option value="4">4</option><option value="5">5</option>
                                                <option value="6">6</option><option value="7">7</option>
                                                <option value="8">8</option><option value="9">9</option>
                                                <option value="10">10</option><option value="11">11</option>
                                                <option value="12">12</option><option value="13">13</option>
                                                <option value="14">14</option><option value="15">15</option>
                                                <option value="16">16</option><option value="17">17</option>
                                                <option value="18">18</option><option value="19">19</option>
                                                <option value="20">20</option><option value="21">21</option>
                                                <option value="22">22</option><option value="23">23</option>
                                                <option value="24">24</option><option value="25">25</option>
                                                <option value="26">26</option><option value="27" selected="1">27</option>
                                                <option value="28">28</option><option value="29">29</option>
                                                <option value="30">30</option><option value="31">31</option>
                                            </select>
                                            <select aria-label="Month" name="birthday_month" id="month" title="Month" class="_5dba"><option value="0">Month</option>
                                                <option value="1" selected="1">Jan</option>
                                                <option value="2">Feb</option><option value="3">Mar</option>
                                                <option value="4">Apr</option><option value="5">May</option>
                                                <option value="6">Jun</option><option value="7">Jul</option>
                                                <option value="8">Aug</option><option value="9">Sept</option>
                                                <option value="10">Oct</option><option value="11">Nov</option>
                                                <option value="12">Dec</option>
                                            </select>
                                            <select aria-label="Year" name="birthday_year" id="year" title="Year" class="_5dba">
                                                <option value="0">Year</option><option value="2019">2019</option>
                                                <option value="2018">2018</option><option value="2017">2017</option>
                                                <option value="2016">2016</option><option value="2015">2015</option>
                                                <option value="2014">2014</option><option value="2013">2013</option>
                                                <option value="2012">2012</option><option value="2011">2011</option>
                                                <option value="2010">2010</option><option value="2009">2009</option>
                                                <option value="2008">2008</option><option value="2007">2007</option>
                                                <option value="2006">2006</option><option value="2005">2005</option>
                                                <option value="2004">2004</option><option value="2003">2003</option>
                                                <option value="2002">2002</option><option value="2001">2001</option>
                                                <option value="2000">2000</option><option value="1999">1999</option>
                                                <option value="1998">1998</option><option value="1997">1997</option>
                                                <option value="1996">1996</option><option value="1995">1995</option>
                                                <option value="1994" selected="1">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option>
                                                <option value="1989">1989</option><option value="1988">1988</option>
                                                <option value="1987">1987</option><option value="1986">1986</option>
                                                <option value="1985">1985</option><option value="1984">1984</option>
                                                <option value="1983">1983</option><option value="1982">1982</option>
                                                <option value="1981">1981</option><option value="1980">1980</option>
                                                <option value="1979">1979</option><option value="1978">1978</option>
                                                <option value="1977">1977</option><option value="1976">1976</option>
                                                <option value="1975">1975</option><option value="1974">1974</option>
                                                <option value="1973">1973</option><option value="1972">1972</option>
                                                <option value="1971">1971</option><option value="1970">1970</option>
                                                <option value="1969">1969</option><option value="1968">1968</option>
                                                <option value="1967">1967</option><option value="1966">1966</option>
                                                <option value="1965">1965</option><option value="1964">1964</option>
                                                <option value="1963">1963</option><option value="1962">1962</option>
                                                <option value="1961">1961</option><option value="1960">1960</option>
                                                <option value="1959">1959</option><option value="1958">1958</option>
                                                <option value="1957">1957</option><option value="1956">1956</option>
                                                <option value="1955">1955</option><option value="1954">1954</option>
                                                <option value="1953">1953</option><option value="1952">1952</option>
                                                <option value="1951">1951</option><option value="1950">1950</option>
                                                <option value="1949">1949</option><option value="1948">1948</option>
                                                <option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option></select></span></span>
                                </div>
                                <div class="para">
                                    <a href=" ">Why do I need to provide my date of birth?</a>
                                </div>
                                <input type="radio" name="gender" value="male"> Male<br>
                                <input type="radio" name="gender" value="female"> Female<br>
                                <div class="button">
                                    <button type="submit" name="btn" value="update" class="btn btn-success">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container" style="margin-top: 80px">
                <div class="row">
                    <div class="col-lg-6">
                        <a href="create_facebook_account.php" class="btn btn-danger">Add Information</a>
                    </div>
                    <div class="col-lg-6">
                        <a href="view_facebook_account.php" class="btn btn-info">view Information</a>
                    </div>
                </div>
            </div>
        </section>
        <script src="style/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>


