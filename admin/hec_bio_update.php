<?php

include('../connection.php');

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Exam Registration Update</title>

    <?php include('../dashboard/icon.php'); ?>

    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />

    <style>
      label {
        font-weight: 600;
        font-family: "Times New Roman", Times, serif;
        color: rgb(5, 15, 6);
      }
    </style>
  </head>

  <body class="bg-info">
    <div class="container p-5">
      <div class="p-3 border border-warning bg-secondary bg-light">
        <center class="pb-3">
          <img
            src="../images/NalikuleLogo.png"
            class="img-thumbnail center"
            alt="NalikuleLogo"
            style="width: 200px; height: 200px"
          />
        </center>

        <center>
          <h2>NALIKULE COLLEGE OF EDUCATION</h2>
          <h5>END OF SEMESTER EXAMINATION REGISTRATION</h5>
          <h6>FORM FOR 2022/2023 ACADEMIC YAER</h6>
        </center>

        <?php

        if(isset($_GET['id'])){
            $student_id = mysqli_real_escape_string($connect, $_GET['id']) ;
            $query = "SELECT * FROM hec_bio WHERE id = '$student_id'";

            $query_run = mysqli_query($connect, $query);

            if(mysqli_num_rows($query_run) > 0){
                $student = mysqli_fetch_array($query_run);
                ?>

                    <form action="reg_update_action.php" method="POST" enctype="multipart/form-data">

                        <input type="hidden" name="student_id" value="<?= $student_id; ?>">

                        <div class="mb-3">
                            <label for="surname" class="fb-3 m-2">
                            SURNAME:
                            </label>

                            <input
                            type="text"
                            class="form-control m-auto"
                            name="surname"
                            value="<?=$student['surname']; ?>"
                            placeholder="Enter surname"
                            required="required"
                            />
                        </div>

                        <label for="othername" class="fb-3 m-2"> OTHER NAMES IN FULL: </label>

                        <div class="mb-3">
                            <input
                            type="text"
                            class="form-control m-auto"
                            name="othername"
                            value="<?=$student['othername']; ?>"
                            placeholder="Enter first name"
                            required="required"
                            />
                        </div>

                        <label for="combi" class="fb-3 m-2"> COURSE: </label>

                        <div class="mb-3">
                            <select name="combi" class="form-select m-auto">
                                <option class="details" value="<?=$student['combi']; ?>"><?=$student['combi']; ?></option>
                                <option value="Mat Agr">Mat Agr</option>
                                <option value="Mat Bio">Mat Bio</option>
                                <option value="Mat Chem">Mat Chem</option>
                                <option value="Mat Com">Mat Com</option>
                                <option value="Mat Hec">Mat Hec</option>
                                <option value="Mat Phy">Mat Phy</option>
                                <option value="Hec Agr">Hec Agr</option>
                                <option value="Hec Bio">Hec Bio</option>
                                <option value="Eng Lal">Eng Lal</option>
                            </select>
                        </div>

                        <label for="yearofstudy" class="fb-3 m-2"> YEAR OF STUDY: </label>

                        <div class="mb-3">
                            <select name="yearofstudy" class="form-select m-auto">
                                <option class="details" value="<?=$student['yearofstudy']; ?>"><?=$student['yearofstudy']; ?></option>
                                <option value="First">FIRST YEAR</option>
                                <option value="Second">SECOND YEAR</option>
                                <option value="Third">THIRD YEAR</option>
                                <option value="Fourth">FOURTH YEAR</option>
                            </select>
                        </div>

                        <label for="regnum" class="fb-3 m-2">REGISTRATION NO.: </label>

                        <div class="mb-3">
                            <input
                            type="text"
                            class="form-control m-auto"
                            name="regnum"
                            value="<?=$student['regnum']; ?>"
                            placeholder="Enter registration number"
                            required="required"
                            />
                        </div>

                        <label for="table" class="fb-3 m-2"
                            >CODE NUMBERS AND TITLES OF EXMINATIONS YOU ARE GOING TO SIT FOR:
                        </label>

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col"><center>CODE NO.</center></th>
                                <th scope="col"><center>TITLE</center></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>
                                <div class="mb-3">
                                    <input
                                    type="text"
                                    class="form-control m-auto"
                                    name="code1"
                                    value="<?=$student['code1']; ?>"
                                    placeholder="Code 1"
                                    required="required"
                                    />
                                </div>
                                </th>

                                <td>
                                <div class="mb-3">
                                    <input
                                    type="text"
                                    class="form-control m-auto"
                                    name="course1"
                                    value="<?=$student['course1']; ?>"
                                    placeholder="Course title 1"
                                    required="required"
                                    />
                                </div>
                                </td>
                            </tr>

                            <tr>
                                <th>
                                <div class="mb-3">
                                    <input
                                    type="text"
                                    class="form-control m-auto"
                                    name="code2"
                                    value="<?=$student['code2']; ?>"
                                    placeholder="Code 2"
                                    required="required"
                                    />
                                </div>
                                </th>

                                <td>
                                <div class="mb-3">
                                    <input
                                    type="text"
                                    class="form-control m-auto"
                                    name="course2"
                                    value="<?=$student['course2']; ?>"
                                    placeholder="Course title 2"
                                    required="required"
                                    />
                                </div>
                                </td>
                            </tr>

                            <tr>
                                <th>
                                <div class="mb-3">
                                    <input
                                    type="text"
                                    class="form-control m-auto"
                                    name="code3"
                                    value="<?=$student['code3']; ?>"
                                    placeholder="Code 3"
                                    required="required"
                                    />
                                </div>
                                </th>

                                <td>
                                <div class="mb-3">
                                    <input
                                    type="text"
                                    class="form-control m-auto"
                                    name="course3"
                                    value="<?=$student['course3']; ?>"
                                    placeholder="Course title 3"
                                    required="required"
                                    />
                                </div>
                                </td>
                            </tr>

                            <tr>
                                <th>
                                <div class="mb-3">
                                    <input
                                    type="text"
                                    class="form-control m-auto"
                                    name="code4"
                                    value="<?=$student['code4']; ?>"
                                    placeholder="Code 4"
                                    required="required"
                                    />
                                </div>
                                </th>

                                <td>
                                <div class="mb-3">
                                    <input
                                    type="text"
                                    class="form-control m-auto"
                                    name="course4"
                                    value="<?=$student['course4']; ?>"
                                    placeholder="Course title 4"
                                    required="required"
                                    />
                                </div>
                                </td>
                            </tr>

                            <tr>
                                <th>
                                <div class="mb-3">
                                    <input
                                    type="text"
                                    class="form-control m-auto"
                                    name="code5"
                                    value="<?=$student['code5']; ?>"
                                    placeholder="Code 5"
                                    />
                                </div>
                                </th>

                                <td>
                                <div class="mb-3">
                                    <input
                                    type="text"
                                    class="form-control m-auto"
                                    name="course5"
                                    value="<?=$student['course5']; ?>"
                                    placeholder="Course title 5"
                                    />
                                </div>
                                </td>
                            </tr>

                            <tr>
                                <th>
                                <div class="mb-3">
                                    <input
                                    type="text"
                                    class="form-control m-auto"
                                    name="code6"
                                    value="<?=$student['code6']; ?>"
                                    placeholder="Code 6"
                                    />
                                </div>
                                </th>

                                <td>
                                <div class="mb-3">
                                    <input
                                    type="text"
                                    class="form-control m-auto"
                                    name="course6"
                                    value="<?=$student['course6']; ?>"
                                    placeholder="Course title 6"
                                    />
                                </div>
                                </td>
                            </tr>

                            <tr>
                                <th>
                                <div class="mb-3">
                                    <input
                                    type="text"
                                    class="form-control m-auto"
                                    name="code7"
                                    value="<?=$student['code7']; ?>"
                                    placeholder="Code 7"
                                    />
                                </div>
                                </th>

                                <td>
                                <div class="mb-3">
                                    <input
                                    type="text"
                                    class="form-control m-auto"
                                    name="course7"
                                    value="<?=$student['course7']; ?>"
                                    placeholder="Course title 7"
                                    />
                                </div>
                                </td>
                            </tr>

                            <tr>
                                <th>
                                <div class="mb-3">
                                    <input
                                    type="text"
                                    class="form-control m-auto"
                                    name="code8"
                                    value="<?=$student['code8']; ?>"
                                    placeholder="Code 8"
                                    />
                                </div>
                                </th>

                                <td>
                                <div class="mb-3">
                                    <input
                                    type="text"
                                    class="form-control m-auto"
                                    name="course8"
                                    value="<?=$student['course8']; ?>"
                                    placeholder="Course title 8"
                                    />
                                </div>
                                </td>
                            </tr>

                            <tr>
                                <th>
                                <div class="mb-3">
                                    <input
                                    type="text"
                                    class="form-control m-auto"
                                    name="code9"
                                    value="<?=$student['code9']; ?>"
                                    placeholder="Code 9"
                                    />
                                </div>
                                </th>

                                <td>
                                <div class="mb-3">
                                    <input
                                    type="text"
                                    class="form-control m-auto"
                                    name="course9"
                                    value="<?=$student['course9']; ?>"
                                    placeholder="Course title 9"
                                    />
                                </div>
                                </td>
                            </tr>

                            <tr>
                                <th>
                                <div class="mb-3">
                                    <input
                                    type="text"
                                    class="form-control m-auto"
                                    name="code10"
                                    value="<?=$student['code10']; ?>"
                                    placeholder="Code 10"
                                    />
                                </div>
                                </th>

                                <td>
                                <div class="mb-3">
                                    <input
                                    type="text"
                                    class="form-control m-auto"
                                    name="course10"
                                    value="<?=$student['course10']; ?>"
                                    placeholder="Course title 10"
                                    />
                                </div>
                                </td>
                            </tr>


                            </tbody>
                        </table>

                        <label for="name" class="fb-3 m-2"> CONTACT ADDRESS: </label>

                        <div class="mb-3">
                            <input
                            type="text"
                            class="form-control m-auto"
                            name="address"
                            value="<?=$student['address']; ?>"
                            placeholder="Enter address"
                            required="required"
                            />
                        </div>

                        <label for="phone" class="fb-3 m-2"> CELL / TEL NO.: </label>

                        <div class="mb-3">
                            <input
                            type="text"
                            class="form-control m-auto"
                            name="phone"
                            value="<?=$student['phone']; ?>"
                            placeholder="Enter phone number"
                            required="required"
                            />
                        </div>

                        <i>
                            I certify that I have read the rules and regulations governing
                            examinations at Nalikule College of Education and I agree to abide
                            by them.
                        </i>


                        <div class="mb-3">
                            <label class="fb-3 m-2" for="photo"
                            >Upload photo of your signature:</label
                            >
                            <input
                            type="file"
                            class="form-control w-50 m-auto"
                            name="photo"
                            required="required"
                            />
                        </div>

                        <center>
                            <button type="submit" name="hec_bio_update" class="btn btn-secondary">SUBMIT</button>
                        </center>
                    </form>

                <?php

            }
            else{
                echo "<h4> No Such Id Found</h4>";
            }
        }

        ?>

      </div>
    </div>
  </body>
</html>
