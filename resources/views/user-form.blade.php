<div>
    <h1>Add New User</h1>
    <div class="container form-control">
        <form action="addUser" method="POST">
            @csrf
            <div class="form-control">
                <input type="text" name="hello" placeholder="Enter User Name:">
            </div>
            <div class="form-control">
                <input type="email" name="email" placeholder="Enter User email:">
            </div>
            <div class="form-control">
                <input type="text" name="cityname" placeholder="Enter User City:">
            </div>
            <button class="btn btn-success" type="submit" name="save" placeholder="Save">
                Save Now
            </button>

        </form>

    </div>
    {{-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh --}}
</div>
<style>
    .form-control {
        margin: 10px;
    }

    input {
        border: orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: orange;
        /* background: #fff;
        cursor: pointer; */
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