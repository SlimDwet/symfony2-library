var $collectionHolder;

// setup an "add a author" link
var $addAuthorLink = $('<a href="#" class="add_author_link">Add an author</a>');
var $newLinkLi = $('<li></li>').append($addAuthorLink);

function addAuthorForm($collectionHolder, $newLinkLi) {
    // Get the data-prototype explained earlier
    var prototype = $collectionHolder.data('prototype');

    // get the new index
    var index = $collectionHolder.data('index');

    // Replace '__name__' in the prototype's HTML to
    // instead be a number based on how many items we have
    var newForm = prototype.replace(/__name__/g, index);

    // increase the index with one for the next item
    $collectionHolder.data('index', index + 1);

    // Display the form in the page in an li, before the "Add an author" link li
    var $newFormLi = $('<li></li>').append(newForm);
    $newLinkLi.before($newFormLi);
}

jQuery(document).ready(function() {
    // Get the ul that holds the collection of authors
    $collectionHolder = $('ul.authors_new');

    // add the "add a author" anchor and li to the authors ul
    $collectionHolder.append($newLinkLi);

    // count the current form inputs we have (e.g. 2), use that as the new
    // index when inserting a new item (e.g. 2)
    $collectionHolder.data('index', $collectionHolder.find(':input').length);

    $addAuthorLink.on('click', function(e) {
        // prevent the link from creating a "#" on the URL
        e.preventDefault();

        // add a new tag form (see next code block)
        addAuthorForm($collectionHolder, $newLinkLi);
    });
});