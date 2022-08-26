<form action="/form" method="post" enctype="multipart/form-data">
    @csrf
    <label for="title">Title:</label><br>
    <input type="text" name="title"><br>
    <label for="body">Body:</label><br>
    <textarea  name="body" cols="30" rows="10"></textarea><br><br>

    <label for="avatar">Choose a Picture:</label>

<input type="file"
       id="avatar" name="avatar"
       accept="image/png, image/jpeg"><br><br>

    <tr><button>Send</button>
  </form>
