var jsonDataUrl = '../public/assets/json/sub_category.json';

fetch(jsonDataUrl)
    .then(response => response.json())
    .then(data => {
        data.forEach(item => {
            item.image = `../public/assets/img/profiles/${item.image}`;
        });
        if ($.fn.DataTable.isDataTable('#sub_category_data')) {
            $('#sub_category_data').DataTable().destroy();
        }
        var table = $('#sub_category_data').DataTable({
            ordering: false,
            data: data,
            columns: [
                { data: 'id' },
                { data: 'categoryName' },
                { data: 'subCategoryName' },
                {
                    data: null,
                    render: function (data, type, row) {
                        var AvatarHtml = ` <div class="dropdown dropdown-action text-end">
                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false"><i class="material-icons">more_vert</i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                data-bs-target="#edit_categories"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                data-bs-target="#delete"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                        </div>
                    </div>`;
                        return AvatarHtml;
                    }
                },
            ],
            paging: false,
            searching: false,
            info: false,
            scrollX:false,
            scrollY:false
            
        });
    })
    .catch(error => {
        console.error('Error:', error);
    });