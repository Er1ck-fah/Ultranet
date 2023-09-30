$(document).ready(function () {
    $(".btn-montant").click(function (e) {
        var idElt = this.id;
        var formData1 = new FormData();
        var url = $("#montant-produit_" + idElt).attr("action");
        var type_methode = $("#method").val();
        var method = type_methode === "PUT" ? "PUT" : "POST";
        formData1.append("methode", method);
        formData1.append(
            "categorie_id",
            parseInt($("#categorie_id" + idElt).val())
        );
        formData1.append("idproduit", parseInt($("#idproduit_" + idElt).val()));
        formData1.append(
            "valeur_min",
            parseFloat($("#valeur_min_" + idElt).val())
        );
        formData1.append(
            "valeur_max",
            parseFloat($("#valeur_max_" + idElt).val())
        );
        formData1.append("is_sale", parseInt($("#is_sale_" + idElt).val()));
        $.ajaxSetup({
            headers: {
                "X-CSSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        console.log(formData1);
        $.ajax({
            method: type_methode,
            url: url,
            data: formData1,
            async: true,
            dataType: "JSON",
            contentType: false,
            cache: false,
            processData: false,
            success: (result) => {
                //$(".tr_" + idElt).fadeOut("slow");
                console.log(result);
            },
            error: (error) => {
                console.log(error);
            },
        });
    });
});

$(document).ready(function () {
    var path = "{{ route('autocomplete') }}";
    $("#search").select2({
        placeholder: "Select Sous traitant",
        allowClear: true,
        ajax: {
            url: path,
            dataType: "json",
            delay: 250,
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.name_client,
                            text: item.surname_client,
                            text: item.code_client,
                            text: item.description_client,
                            id: item.id,
                        };
                    }),
                };
            },
            cache: true,
        },
    });
    $("#search").change(function () {
        $;
        alert("Charge info client!");
    });
});

function getInfoProduit(id) {
    var idP = id;
    $.ajax({
        url: "/infos_produit",
        data: { id: idP },
        async: true,
        success: (result) => {
            console.log(result.produit);
            $("#prix_unitaire").val(result.produit.valeur_max);
            $("#total_produit").val(
                result.produit.valeur_max * $("#quantite").val()
            );
        },
        error: (error) => {
            console.log(error);
        },
    });
}

$(document).ready(function () {
    $("#id_produit").change(function () {
        var id = this.value;
        $("#total_produit").val(
            $("#prix_unitaire").val() * $("#quantite").val()
        );
        getInfoProduit(id);
    });
    $("#minus").click(function () {
        var currentValue = parseInt($("#quantite").val());
        currentValue -= 1;
        currentValue = currentValue < 2 ? 1 : currentValue;
        $("#quantite").val(currentValue);
        $("#total_produit").val(
            $("#prix_unitaire").val() * $("#quantite").val()
        );
    });
    $("#plus").click(function () {
        var currentValue = parseInt($("#quantite").val());
        currentValue += 1;
        $("#quantite").val(currentValue);
        $("#total_produit").val(
            $("#prix_unitaire").val() * $("#quantite").val()
        );
    });
});

$(document).ready(function () {
    $("#addTr").on("click", function () {
        // Adding a row inside the tbody.
        $("#tbody").append(`<tr id="">
                            <td>
                                <select name="id_produit" id="id_produit" class="form-control rounded-0">
                                    <option value="-1" selected>-----------------</option>
                                    @foreach ($produits as $produit)
                                        <option value="{{ $produit->id }}">{{ $produit->lib_produit }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <input type="text" class="form-control" id="prix_unitaire" name="prix_unitaire"
                                    aria-describedby="inputGroupPrepend"/>
                            </td>
                            <td>
                                <button id="minus" class="btn btn-success">−</button>
                                <input type="text" value="1" id="quantite" class="col-4" />
                                <button id="plus" class="btn btn-danger">+</button>
                            </td>
                            <td>
                                <input type="text" class="form-control" id="total_produit" name="total_produit"
                                    aria-describedby="inputGroupPrepend" />
                            </td>
                            <td>
                                <a href="#" id="deleteTr" class="btn btn-danger"><i
                                        class="bi bi-x-circle-fill"></i></a>
                            </td>
                        </tr>`);
    });
});
$(document).ready(function () {
    // jQuery button click event to remove a row.
    $("#tbody").on("click", ".remove", function () {
        // Getting all the rows next to the row
        // containing the clicked button
        var child = $(this).closest("tr").nextAll();

        // Iterating across all the rows
        // obtained to change the index
        child.each(function () {
            // Getting <tr> id.
            var id = $(this).attr("id");

            // Getting the <p> inside the .row-index class.
            var idx = $(this).children(".row-index").children("p");

            // Gets the row number from <tr> id.
            var dig = parseInt(id.substring(1));

            // Modifying row index.
            idx.html(`Row ${dig - 1}`);

            // Modifying row id.
            $(this).attr("id", `R${dig - 1}`);
        });

        // Removing the current row.
        $(this).closest("tr").remove();

        // Decreasing total number of rows by 1.
        rowIdx--;
    });
});
// $(document).ready(function () {
//     const post_id = $("#post-details").attr("data-post-id");
//     getCommentsOfPosts(post_id);

//     $("#comment-form-submit").submit(function (e) {
//         e.preventDefault();
//         const formData = $(this).serialize();
//         const saveButton = $("#save-comment-button");
//         saveButton.html('Saving <i class="fa fa-spin fa-spinner fa-2x"></i>');

//         $.ajax({
//             method: "POST",
//             url: "/api/comments/" + post_id,
//             data: formData,
//             success: (result) => {
//                 $("#comment-input").val("");
//                 $("#comment-error-data").text("");
//                 $("#successMessage").removeClass("visually-hidden");
//                 saveButton.html("Save");
//                 getCommentsOfPosts(post_id);
//             },
//             error: (error) => {
//                 saveButton.html("Save");
//                 $("#successMessage").addClass("visually-hidden");
//                 if (error.status === 422) {
//                     const message = error.responseJSON
//                         ? error.responseJSON.errors
//                             ? error.responseJSON.errors.comment
//                                 ? error.responseJSON.errors.comment[0]
//                                 : ""
//                             : ""
//                         : "";
//                     $("#comment-error-data").text(message);
//                 }
//             },
//         });
//     });
// });
