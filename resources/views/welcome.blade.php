<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Management</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
    @livewireStyles
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2>User Management</h2>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#userModal">
      <i class="fa fa-user-plus"></i> Add User
    </button>
  </div>
  @livewire('list-users')


</div>

<!-- User Modal -->
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    @livewire('modify-user')
    
  </div>
</div>
@livewireScripts
<!-- Bootstrap JS + Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
window.addEventListener('DOMContentLoaded', function() {
    const modalEl = document.getElementById('userModal');
    let modal = bootstrap.Modal.getInstance(modalEl);

    // If modal instance doesn't exist, create one
    if (!modal) {
        modal = new bootstrap.Modal(modalEl);
    }

    window.addEventListener("success", event => {
        modal.hide();
    });
    
});
function deleteUser(id){
    c = confirm('Are you sure you want to delete this user?');
    if(c == false) return;
    Livewire.dispatch('removeUser',{'id':id});
}
</script>

</body>
</html>
