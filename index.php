<!--
-  DB Script Tool
- 2018-08-07 20:41:16
- 
-  HTML5 Forms for HRTest Database
-->
<!DOCTYPE html>
<html  lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>HRTest Forms</title>

    <!--
    <link rel="stylesheet" type="text/css" href="file.css" media="all">
    <script type="text/javascript" src="file.js"></script>
    -->

    <style type="text/css">
        form { background-color: #eee; padding: 10px; margin-bottom: 10px; }
        form fieldset { border: 1px solid #CCC; }
        form h2 { color: green; font-size: 16pt; font-variant: small-caps; }
        .row { clear: right; display: block; padding-bottom: 8px; }
        .label { color: #333; font-weight: bold; clear: right; display: block; }
    </style>

</head>
<body>

    <header id="header"></header>

    <div id="main">

        <form id="formPerson" class="form" enctype="multipart/form-data" method="post" action="">
            <fieldset>

                <h3>Person Form</h3>

                <div class="row">
                    <label class="label" for="id">Id</label>
                    <input id="id" name="id" class="" type="number"  min="0" max="9999999999" value="0"/>
                </div>

                <div class="row">
                    <label class="label" for="firstName">FirstName</label>
                    <input id="firstName" name="firstName" class="" type="text" maxlength="50" value=""/>
                </div>

                <div class="row">
                    <label class="label" for="middleInitial">MiddleInitial</label>
                    <input id="middleInitial" name="middleInitial" class="" type="text" maxlength="3" value=""/>
                </div>

                <div class="row">
                    <label class="label" for="lastName">LastName</label>
                    <input id="lastName" name="lastName" class="" type="text" maxlength="100" value=""/>
                </div>

                <div class="row">
                    <label class="label" for="nickName">NickName</label>
                    <input id="nickName" name="nickName" class="" type="text" maxlength="50" value=""/>
                </div>

                <div class="row">
                    <label class="label" for="otherId">OtherId</label>
                    <input id="otherId" name="otherId" class="" type="number"  min="0" max="9999999999" value="0"/>
                </div>

                <div class="row">
                    <label class="label" for="gender">Gender</label>
                    <input id="gender" name="gender" class="" type="text" maxlength="10" value=""/>
                </div>

                <div class="row">
                    <label class="label" for="martitalStatus">MartitalStatus</label>
                    <input id="martitalStatus" name="martitalStatus" class="" type="text" maxlength="20" value=""/>
                </div>

                <div class="row">
                    <label class="label" for="nationality">Nationality</label>
                    <input id="nationality" name="nationality" class="" type="text" maxlength="30" value=""/>
                </div>

                <div class="row">
                    <label class="label" for="dob">Dob</label>
                    <input id="dob" name="dob" class="" type="text" value="" />
                </div>

                <div class="row">
                    <label class="label" for="type">Type</label>
                    <input id="type" name="type" class="" type="text" maxlength="20" value=""/>
                </div>

                <div class="row">
                    <label class="label" for="notes">Notes</label>
                    <input id="notes" name="notes" class="" type="text" maxlength="250" value=""/>
                </div>

                <div class="row">
                    <label class="label" for="active">
                        <input id="active" name="active" type="checkbox" checked="checked" />
                        Active
                    </label>
                </div>

                <div class="row">
                    <input class="" type="button" value="Cancel" />
                    <input class="" type="submit" value="Save" />
                </div>

            </fieldset>
        </form>

        <form id="formAddress" class="form" enctype="multipart/form-data" method="post" action="">
            <fieldset>

                <h3>Address Form</h3>

                <div class="row">
                    <label class="label" for="id">Id</label>
                    <input id="id" name="id" class="" type="number"  min="0" max="9999999999" value="0"/>
                </div>

                <div class="row">
                    <label class="label" for="line01">Line01</label>
                    <input id="line01" name="line01" class="" type="text" maxlength="100" value=""/>
                </div>

                <div class="row">
                    <label class="label" for="line02">Line02</label>
                    <input id="line02" name="line02" class="" type="text" maxlength="100" value=""/>
                </div>

                <div class="row">
                    <label class="label" for="city">City</label>
                    <input id="city" name="city" class="" type="text" maxlength="100" value=""/>
                </div>

                <div class="row">
                    <label class="label" for="state">State</label>
                    <input id="state" name="state" class="" type="text" maxlength="100" value=""/>
                </div>

                <div class="row">
                    <label class="label" for="zip">Zip</label>
                    <input id="zip" name="zip" class="" type="text" maxlength="20" value=""/>
                </div>

                <div class="row">
                    <label class="label" for="country">Country</label>
                    <input id="country" name="country" class="" type="text" maxlength="100" value=""/>
                </div>

                <div class="row">
                    <label class="label" for="active">
                        <input id="active" name="active" type="checkbox" checked="checked" />
                        Active
                    </label>
                </div>

                <div class="row">
                    <input class="" type="button" value="Cancel" />
                    <input class="" type="submit" value="Save" />
                </div>

            </fieldset>
        </form>

        <form id="formGroup" class="form" enctype="multipart/form-data" method="post" action="">
            <fieldset>

                <h3>Group Form</h3>

                <div class="row">
                    <label class="label" for="id">Id</label>
                    <input id="id" name="id" class="" type="number"  min="0" max="9999999999" value="0"/>
                </div>

                <div class="row">
                    <label class="label" for="name">Name</label>
                    <input id="name" name="name" class="" type="text" maxlength="100" value=""/>
                </div>

                <div class="row">
                    <label class="label" for="active">
                        <input id="active" name="active" type="checkbox" checked="checked" />
                        Active
                    </label>
                </div>

                <div class="row">
                    <input class="" type="button" value="Cancel" />
                    <input class="" type="submit" value="Save" />
                </div>

            </fieldset>
        </form>

        <form id="formPhone" class="form" enctype="multipart/form-data" method="post" action="">
            <fieldset>

                <h3>Phone Form</h3>

                <div class="row">
                    <label class="label" for="id">Id</label>
                    <input id="id" name="id" class="" type="number"  min="0" max="9999999999" value="0"/>
                </div>

                <div class="row">
                    <label class="label" for="number">Number</label>
                    <input id="number" name="number" class="" type="text" maxlength="25" value=""/>
                </div>

                <div class="row">
                    <label class="label" for="typeid">Typeid</label>
                    <input id="typeid" name="typeid" class="" type="number"  min="0" max="9999999999" value="0"/>
                </div>

                <div class="row">
                    <label class="label" for="active">
                        <input id="active" name="active" type="checkbox" checked="checked" />
                        Active
                    </label>
                </div>

                <div class="row">
                    <input class="" type="button" value="Cancel" />
                    <input class="" type="submit" value="Save" />
                </div>

            </fieldset>
        </form>

        <form id="formPhoneTypes" class="form" enctype="multipart/form-data" method="post" action="">
            <fieldset>

                <h3>PhoneTypes Form</h3>

                <div class="row">
                    <label class="label" for="id">Id</label>
                    <input id="id" name="id" class="" type="number"  min="0" max="9999999999" value="0"/>
                </div>

                <div class="row">
                    <label class="label" for="name">Name</label>
                    <input id="name" name="name" class="" type="text" maxlength="25" value=""/>
                </div>

                <div class="row">
                    <input class="" type="button" value="Cancel" />
                    <input class="" type="submit" value="Save" />
                </div>

            </fieldset>
        </form>

        <form id="formEmail" class="form" enctype="multipart/form-data" method="post" action="">
            <fieldset>

                <h3>Email Form</h3>

                <div class="row">
                    <label class="label" for="id">Id</label>
                    <input id="id" name="id" class="" type="number"  min="0" max="9999999999" value="0"/>
                </div>

                <div class="row">
                    <label class="label" for="emailAddress">EmailAddress</label>
                    <input id="emailAddress" name="emailAddress" class="" type="text" maxlength="50" value=""/>
                </div>

                <div class="row">
                    <label class="label" for="typeId">TypeId</label>
                    <input id="typeId" name="typeId" class="" type="number"  min="0" max="9999999999" value="0"/>
                </div>

                <div class="row">
                    <label class="label" for="active">
                        <input id="active" name="active" type="checkbox" checked="checked" />
                        Active
                    </label>
                </div>

                <div class="row">
                    <input class="" type="button" value="Cancel" />
                    <input class="" type="submit" value="Save" />
                </div>

            </fieldset>
        </form>

        <form id="formEmailTypes" class="form" enctype="multipart/form-data" method="post" action="">
            <fieldset>

                <h3>EmailTypes Form</h3>

                <div class="row">
                    <label class="label" for="id">Id</label>
                    <input id="id" name="id" class="" type="number"  min="0" max="9999999999" value="0"/>
                </div>

                <div class="row">
                    <label class="label" for="name">Name</label>
                    <input id="name" name="name" class="" type="text" maxlength="100" value=""/>
                </div>

                <div class="row">
                    <input class="" type="button" value="Cancel" />
                    <input class="" type="submit" value="Save" />
                </div>

            </fieldset>
        </form>

        <form id="formJob" class="form" enctype="multipart/form-data" method="post" action="">
            <fieldset>

                <h3>Job Form</h3>

                <div class="row">
                    <label class="label" for="id">Id</label>
                    <input id="id" name="id" class="" type="number"  min="0" max="9999999999" value="0"/>
                </div>

                <div class="row">
                    <label class="label" for="title">Title</label>
                    <input id="title" name="title" class="" type="text" maxlength="50" value=""/>
                </div>

                <div class="row">
                    <label class="label" for="employmentStatus">EmploymentStatus</label>
                    <input id="employmentStatus" name="employmentStatus" class="" type="text" maxlength="25" value=""/>
                </div>

                <div class="row">
                    <label class="label" for="location">Location</label>
                    <input id="location" name="location" class="" type="text" maxlength="25" value=""/>
                </div>

                <div class="row">
                    <label class="label" for="hours">Hours</label>
                    <input id="hours" name="hours" class="" type="number"  min="0" max="9999999999" value="0"/>
                </div>

                <div class="row">
                    <label class="label" for="active">
                        <input id="active" name="active" type="checkbox" checked="checked" />
                        Active
                    </label>
                </div>

                <div class="row">
                    <input class="" type="button" value="Cancel" />
                    <input class="" type="submit" value="Save" />
                </div>

            </fieldset>
        </form>

        <form id="formLinks" class="form" enctype="multipart/form-data" method="post" action="">
            <fieldset>

                <h3>Links Form</h3>

                <div class="row">
                    <label class="label" for="id">Id</label>
                    <input id="id" name="id" class="" type="number"  min="0" max="9999999999" value="0"/>
                </div>

                <div class="row">
                    <label class="label" for="fromTable">FromTable</label>
                    <input id="fromTable" name="fromTable" class="" type="text" maxlength="10" value=""/>
                </div>

                <div class="row">
                    <label class="label" for="fromTableId">FromTableId</label>
                    <input id="fromTableId" name="fromTableId" class="" type="number"  min="0" max="9999999999" value="0"/>
                </div>

                <div class="row">
                    <label class="label" for="toTable">ToTable</label>
                    <input id="toTable" name="toTable" class="" type="text" maxlength="10" value=""/>
                </div>

                <div class="row">
                    <label class="label" for="toTableId">ToTableId</label>
                    <input id="toTableId" name="toTableId" class="" type="number"  min="0" max="9999999999" value="0"/>
                </div>

                <div class="row">
                    <label class="label" for="fromDate">FromDate</label>
                    <input id="fromDate" name="fromDate" class="" type="text" value="" />
                </div>

                <div class="row">
                    <label class="label" for="toDate">ToDate</label>
                    <input id="toDate" name="toDate" class="" type="text" value="" />
                </div>

                <div class="row">
                    <label class="label" for="active">
                        <input id="active" name="active" type="checkbox" checked="checked" />
                        Active
                    </label>
                </div>

                <div class="row">
                    <input class="" type="button" value="Cancel" />
                    <input class="" type="submit" value="Save" />
                </div>

            </fieldset>
        </form>

        <form id="formAudit" class="form" enctype="multipart/form-data" method="post" action="">
            <fieldset>

                <h3>Audit Form</h3>

                <div class="row">
                    <label class="label" for="id">Id</label>
                    <input id="id" name="id" class="" type="number"  min="0" max="9999999999" value="0"/>
                </div>

                <div class="row">
                    <label class="label" for="logUpdateTime">LogUpdateTime</label>
                    <input id="logUpdateTime" name="logUpdateTime" class="" type="text" value="" />
                </div>

                <div class="row">
                    <label class="label" for="logMessage">LogMessage</label>
                    <input id="logMessage" name="logMessage" class="" type="text" maxlength="1000" value=""/>
                </div>

                <div class="row">
                    <input class="" type="button" value="Cancel" />
                    <input class="" type="submit" value="Save" />
                </div>

            </fieldset>
        </form>

        <form id="formUser" class="form" enctype="multipart/form-data" method="post" action="">
            <fieldset>

                <h3>User Form</h3>

                <div class="row">
                    <label class="label" for="id">Id</label>
                    <input id="id" name="id" class="" type="number"  min="0" max="9999999999" value="0"/>
                </div>

                <div class="row">
                    <label class="label" for="personId">PersonId</label>
                    <input id="personId" name="personId" class="" type="number"  min="0" max="9999999999" value="0"/>
                </div>

                <div class="row">
                    <label class="label" for="username">Username</label>
                    <input id="username" name="username" class="" type="text" maxlength="20" value=""/>
                </div>

                <div class="row">
                    <label class="label" for="password">Password</label>
                    <input id="password" name="password" class="" type="text" maxlength="50" value=""/>
                </div>

                <div class="row">
                    <label class="label" for="active">
                        <input id="active" name="active" type="checkbox" checked="checked" />
                        Active
                    </label>
                </div>

                <div class="row">
                    <input class="" type="button" value="Cancel" />
                    <input class="" type="submit" value="Save" />
                </div>

            </fieldset>
        </form>

    </div>

    <footer id="footer"></footer>

</body>
</html>