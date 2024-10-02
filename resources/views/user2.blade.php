<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
    <h2>Add New User</h2>

    <div class="container">
        <form action="addGender" method="POST">
            @csrf
            <div>
                <h1>User SKills</h1>
                <input type="checkbox" name="skill" value="php">
                <label for="php">PHP</label>

                <input type="checkbox" name="skill" value="node">
                <label for="node">Node</label>

                <input type="checkbox" name="skill" value="java">
                <label for="java">JAVA</label>
            </div>
            <div>
                <h1>Gender</h1>
                <input type="radio" name="gender" value="male">
                <label for="male">Male</label>

                <input type="radio" name="gender" value="female">
                <label for="female">Female</label>

            </div>
            <div>
                {{-- Note: Including the name attribute is important in each types of tags --}}
                <select name="city">
                    <option value="" selected>Choose City</option>
                    <option value="Biratnagar">Biratnagar</option>
                    <option value="Jhapa">Jhapa</option>
                    <option value="Itahari">Itahari</option>
                    <option value="Kathmandu">Kathmandu</option>
                </select>
            </div>
            <button type="submit" class="form-control">Save Now</button>
        </form>

    </div>
</div>