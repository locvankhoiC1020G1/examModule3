<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    * {
        box-sizing: border-box;
    }

    input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }

    label {
        padding: 12px 12px 12px 0;
        display: inline-block;
    }

    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }

    .col-25 {
        float: left;
        width: 25%;
        margin-top: 6px;
    }

    .col-75 {
        float: left;
        width: 75%;
        margin-top: 6px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
        .col-25, .col-75, input[type=submit] {
            width: 100%;
            margin-top: 0;
        }
    }
</style>
<body>
<p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack on
    top of each other instead of next to each other.</p>

<div class="container">
    <form action="{{route('worker.update',$worker['id'])}}" method="post">
        @csrf
        <div class="row">
            <div class="col-25">
                <label for="fname">M?? nh??n vi??n</label>
            </div>
            <div class="col-75">
                <input type="number" id="fname" name="idworker" value="{{$worker['id']}}" required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="lname">S??? ??i???n tho???i</label>
            </div>
            <div class="col-75">
                <input type="text" id="lname" name="phone" value="{{$worker['phone']}}" required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="country">Ch???n nh??m nh??n vi??n</label>
            </div>
            <div class="col-75">
                <select id="country" name="group" required>
                    <option value="Qu???n L?? H??? Th???ng">Qu???n l?? h??? th???ng</option>
                    <option value="Qu???n l?? nh??n s???">Qu???n l?? nh??n s???</option>
                    <option value="L??? T??n">L??? t??n</option>
                    <option value="Qu???n L?? Ph??ng">Qu???n l?? ph??ng</option>
                    <option value="Qu???n L?? d???ch v???">Qu???n l?? d???ch v???</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="lname">S??? CMND</label>
            </div>
            <div class="col-75">
                <input type="text" id="lname" name="CMND" value="{{$worker['CMND']}}" required >
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="lname">H??? T??n</label>
            </div>
            <div class="col-75">
                <input type="text" id="lname" name="name" value="{{$worker['name']}}" required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="lname">Email</label>
            </div>
            <div class="col-75">
                <input type="email" id="lname" name="email" value="{{$worker['email']}}" required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="lname">Ng??y Sinh</label>
            </div>
            <div class="col-75">
                <input type="text" id="lname" name="dob" value="{{$worker['dob']}}" required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <p>Gi???i t??nh</p>
                <input type="radio" id="male" name="gender" value="male">
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label>
            </div>
        </div>
        <div class="col-25">
            <label for="subject">?????a ch???</label>
        </div>
        <div class="col-75">
            <textarea id="subject" name="address" style="height:100px" required ></textarea>
        </div>

        <div class="row">
            <input type="submit" value="Submit">
        </div>
    </form>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
