require('./bootstrap');

// delete post confirm
const delForm = document.querySelectorAll('.delete-post-form');
console.log(delForm);


delForm.forEach(from => {
    from.addEventListener('submit', function(e) {
        const resp = confirm('You really want to delete this post?');
        console.log(resp);

        if(! resp) {
            e.preventDefault();
        }
    });
});