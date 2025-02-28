<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User Form</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #121212;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
            color: #ffffff;
        }

        .form-container {
            background: #1e1e1e;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(255, 255, 255, 0.1);
            max-width: 90%;
            width: 450px;
            opacity: 0;
            transform: translateY(-20px);
            animation: fadeIn 0.8s ease-in-out forwards;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h2 {
            color: #ffffff;
            text-align: center;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .input-group {
            margin-bottom: 15px;
            opacity: 0;
            transform: translateY(10px);
            animation: fadeSlide 0.6s ease-in-out forwards;
        }

        @keyframes fadeSlide {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        label {
            font-size: 14px;
            color: #bbb;
            margin-bottom: 5px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #333;
            border-radius: 5px;
            font-size: 14px;
            background: #2a2a2a;
            color: #ffffff;
            transition: all 0.3s ease-in-out;
        }

        input:focus, select:focus {
            border-color: #1db954;
            box-shadow: 0px 0px 8px rgba(29, 185, 84, 0.5);
        }

        .checkbox-group, .radio-group {
            display: flex;
            align-items: center;
            flex-wrap: nowrap;
            gap: 10px;
        }

        .checkbox-group label, .radio-group label {
            margin-left: 0;
        }

        input[type="checkbox"], input[type="radio"] {
            width: 13px;
            height: 13px;
        }

        .btn {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            background-color: #1db954;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s ease-in-out;
            opacity: 0;
            transform: scale(0.9);
            animation: popIn 0.5s ease-in-out 0.3s forwards;
        }

        @keyframes popIn {
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .btn:hover {
            background-color: #17a747;
            box-shadow: 0px 0px 10px rgba(29, 185, 84, 0.8);
        }

        .input-error{
            border: 2px solid red;
            color: red;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <!-- @if($errors->any())
        @foreach($errors->all() as $error)
        <div style="color:red">{{$error}}</div>
        @endforeach
        @endif -->
        <h2>Add New User</h2>
        <form action="addUser" method="post">
            @csrf
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter username" value="{{old('username')}}"
                class="{{$errors->first('username')?'input-error':''}}">
                <!-- advance validation part2 (get old value,make custom message,input color if invalid) -->
                <span style="color:red">@error('username'){{$message}}@enderror</span>
            </div>
            <div class="input-group">
                <label for="city">City</label>
                <input type="text" id="city" name="city" placeholder="Enter city" value="{{old('city')}}"
                class="{{$errors->first('username')?'input-error':''}}">
                <span style="color:red">@error('city'){{$message}}@enderror</span>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Enter email" value="{{old('email')}}"
                class="{{$errors->first('email')?'input-error':''}}">
                <span style="color:red">@error('email'){{$message}}@enderror</span>
            </div>

            <div class="input-group">
                <label>User Skills</label>
                <div class="checkbox-group">
                    <input type="checkbox" name="skill[]" id="php" value="php">
                    <label for="php">PHP</label>
                    <input type="checkbox" name="skill[]" id="java" value="Java">
                    <label for="java">Java</label>
                    <input type="checkbox" name="skill[]" id="node" value="node">
                    <label for="node">Node</label>
                    <span style="color:red">@error('skill'){{$message}}@enderror</span>
                </div>
            </div>

            <div class="input-group">
                <label>User Gender</label>
                <div class="radio-group">
                    <input type="radio" name="gender" id="male" value="male">
                    <label for="male">Male</label>
                    <input type="radio" name="gender" id="female" value="female">
                    <label for="female">Female</label>
                    <span style="color:red">@error('gender'){{$message}}@enderror</span>
                </div>
            </div>

            <div class="input-group">
                <label for="age">User Age</label>
                <input type="range" id="age" name="age" max="100" min="18">
            </div>
            <span style="color:red">@error('age'){{$message}}@enderror</span>

            <div class="input-group">
                <label for="usercity">User City</label>
                <select id="usercity" name="usercity">
                    <option value="LasPinas">Las Piñas</option>
                    <option value="Cavite">Cavite</option>
                    <option value="Muntinlupa">Muntinlupa</option>
                </select>
            </div>
            <span style="color:red">@error('usercity'){{$message}}@enderror</span>
            <button type="submit" class="btn">Add New User</button>
        </form>
    </div>

</body>
</html>
