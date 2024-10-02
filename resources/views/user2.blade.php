<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->

    {{-- Important --}}
    {{-- @if ($errors->any())
    @foreach ($errors->all() as $item)
    <div style="
    color:rgb(245, 11, 11)">
        {{$item}}
    </div>
    @endforeach
    @endif

    --}}
    <h2>Add New User</h2>


    <div class="container">
        <form action="addGender" method="POST">
            @csrf
            <div>
                <h1>User SKills</h1>
                <input type="checkbox" name="skill[]" value="php">
                <label for="php">PHP</label>


                <input type="checkbox" name="skill[]" value="node">
                <label for="node">Node</label>

                <input type="checkbox" name="skill[]" value="java">
                <label for="java">JAVA</label>
                <span>
                    @error('skill')
                    {{$message}}
                    @enderror
                </span>
            </div>

            <div>
                <h1>Subjects</h1>
                <input type="checkbox" name="subjects[]" value="C">
                <label for="C">C++</label>

                <input type="checkbox" name="subjects[]" value="C++">
                <label for="C++">C</label>

                <input type="checkbox" name="subjects[]" value="Python">
                <label for="Python">Python</label>
                <span>
                    @error('skill')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div>
                <h1>Gender</h1>
                <input type="radio" name="gender" value="male">
                <label for="male">Male</label>

                <input type="radio" name="gender" value="female">
                <label for="female">Female</label>
                <span>
                    @error('skill')
                    {{$message}}
                    @enderror
                </span>

            </div>
            <div>
                {{-- Note: Including the name attribute is important in each types of tags --}}
                <h2>City</h2>

                <select name="city">
                    <option value="" selected>Choose City</option>
                    <option value="Biratnagar">Biratnagar</option>
                    <option value="Jhapa">Jhapa</option>
                    <option value="Itahari">Itahari</option>
                    <option value="Kathmandu">Kathmandu</option>
                </select>
                <span>
                    @error('skill')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <br>
            <div class="hello">
                <div class="form-control ">
                    <input type="text" name="username" placeholder="Enter User Name:">
                </div>
                <div class="form-control">
                    <input type="email" name="email" placeholder="Enter User email:">
                </div>
                <div class="form-control">
                    <input type="text" name="cityname" placeholder="Enter User City:">
                </div>

                <span>
                    @error('cityname')
                    {{$message}}
                    @enderror
                </span>
            </div>

            <button type="submit" class="form-control">Save Now</button>
        </form>

    </div>
</div>
<style>
    span {
        color: red;
        font-family: sans-serif;
        /* background: rgba(237, 114, 114, 0.708); */
        display: inline;
        padding: 2px;
        border-radius: 5px;
    }

    .form-control {
        margin: 10px;
    }


    .hello input {
        border: orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: orange;

    }

    button {
        /* left: 100px; */
        margin-top: 2px;
        background: green;
        color: white;
        padding: 7px;
        border-radius: 12px;
    }
</style>