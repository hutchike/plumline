plumline = {
    onload: function() {
        var photo = document.getElementById('photo');
        if (photo) {
            var src = new String(photo.src);
            photo.src = src.replace('/lowsrc', '');
        }
    }
}
