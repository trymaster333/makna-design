tinymce.init({
    selector: "#deskripsi",
    plugins: "image table advcode",
    height: 500,
    images_upload_url: "{{URL::to('file-upload')}}", // The URL to your Laravel route for handling image uploads
    image_class_list: [{ title: "Responsive", value: "img-fluid" }],
    images_upload_handler: function (blobInfo, success, failure) {
        var xhr, formData;

        xhr = new XMLHttpRequest();
        xhr.withCredentials = false;
        xhr.open("POST", "{{URL::to('file-upload')}}"); // The URL to your Laravel route for handling image uploads

        xhr.onload = function () {
            var json;

            if (xhr.status != 200) {
                failure("HTTP Error: " + xhr.status);
                return;
            }

            json = JSON.parse(xhr.responseText);

            if (!json || typeof json.location != "string") {
                failure("Invalid JSON: " + xhr.responseText);
                return;
            }

            success(json.location);
        };

        formData = new FormData();

        formData.append("file", blobInfo.blob(), blobInfo.filename());

        xhr.send(formData);
    },
    setup: function (editor) {
        editor.on("change", function () {
            tinymce.triggerSave();
        });
    },
});

function validateFile(input) {
    var file = input.files[0];
    var fileType = file.type;
    var maxSize = 10 * 1024 * 1024; // 2MB (adjust the size limit as needed)

    if (!fileType.startsWith("image/")) {
        // Display an error message or perform any other actions
        alert("File bukan gambar.");
        input.value = ""; // Clear the file input field
    }
    if (file.size > maxSize) {
        // Display an error message or perform any other actions
        alert("Maksimum upload gambar ukuran file 10MB.");
        input.value = ""; // Clear the file input field
    }

    var reader = new FileReader();
    var imgElement = document.getElementById("cover");

    reader.onload = function (e) {
        imgElement.setAttribute("src", e.target.result);
    };

    reader.readAsDataURL(file);
}
