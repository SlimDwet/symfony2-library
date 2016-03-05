var $collectionHolder;

// setup an "add a author" link
var $addAuthorLink = $('<br><a href="#" class="add_author_link btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Ajouter un auteur</a>');
var $newLinkLi = $('<p></p>').append($addAuthorLink);

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
    var $newFormLi = $('<div class="form-group"></div>').append(newForm);
    $newLinkLi.before($newFormLi);

    // add a delete link to the new form
    addTagFormDeleteLink($newFormLi);
}

function addTagFormDeleteLink($tagFormLi) {
    var $removeFormA = $('<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Supprimer cet auteur</a>');
    $tagFormLi.append($removeFormA);

    $removeFormA.on('click', function(e) {
        // prevent the link from creating a "#" on the URL
        e.preventDefault();

        // remove the li for the tag form
        $tagFormLi.remove();
    });
}

jQuery(document).ready(function() {
    // Get the ul that holds the collection of authors
    $collectionHolder = $('.book_authors');

    // add the "add a author" anchor and li to the authors ul
    $collectionHolder.append($newLinkLi);

    // add a delete link to all of the existing tag form li elements
    $collectionHolder.find('.author_item').each(function() {
        addTagFormDeleteLink($(this));
    });

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