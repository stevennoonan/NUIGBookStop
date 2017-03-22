/**
 * Created by Owner on 22/03/2017.
 */
Template.addData.onRendered(function() {

    jQuery.validator.addMethod("doesUsernameExist", function(value, element) {
        return (Meteor.users.findOne({username: value})) ?true :false;
    }, "Sorry, this username is not in the database, please try something else");

    $(".addDataForm").validate({
        rules: {
            user: {
                required: true,
                doesUsernameExist: true
            },
            name: {
                required: true
            },
            author: {
                required: true
            },
            publisher: {
                required: false
            },
            yearpublished: {
                required: false
            },
            category: {
                required: false
            },
            course: {
                required: true
            },
            condition: {
                required: true
            },
            revision: {
                required: true
            },
            price: {
                required: true
            },
            description: {
                required: true
            }
        },


        messages: {
            name: {
                required: "You must provide the name of the book"
            },
            author: {
                required: "You must provide the author of the book"
            },
            course: {
                required: "You must provide the course for the book"
            },
            condition: {
                required: "You must provide the condition of the book"
            },
            revision: {
                required: "You must give edition of the book"
            },
            price: {
                required: "You must give a rough selling price"
            },
            description: {
                required: "Please give a description of the book"
            }
        }
    });
}