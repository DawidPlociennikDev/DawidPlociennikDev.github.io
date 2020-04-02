window.addEventListener('load', function () {
    document.getElementById('photo').addEventListener('change', function () {
        document.getElementById('photoViewer').innerHTML = '<i class="fas fa-spinner fa-pulse loader"></i>';

        if (this.files && this.files[0]) {
            img = URL.createObjectURL(this.files[0]);
            setTimeout(function () {
                document.getElementById('photoViewer').innerHTML = ' \
                <div class="remove-button" onclick="removePhoto()"> \
                	<i class="fas fa-times"></i> \
                </div> \
                <img class="img-fluid img-thumbnail" src="' + img + '" width="120">';
            }, 500);
        }
    });
});

function removePhoto() {
	var photo = document.getElementById('photoViewer');
	photo.innerHTML = '';
	var input = document.createElement("INPUT");
	input.setAttribute("type", "hidden");
	input.setAttribute("name", "removed_photo");
	photo.appendChild(input);
}