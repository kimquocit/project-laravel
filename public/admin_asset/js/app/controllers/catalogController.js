app.controller('catalogController' ,function ($scope,$http,API) {
	$http.get(API + 'admin/catalog/getlist').then(function (response) {
		$scope.catalogs = response.data;
	});

	$scope.modal = function (state,id) {
		$scope.state = state
		switch (state) {
			case "add" :
				$scope.frmTitle = "Thêm Sinh Viên";
				break;
			case "edit" :
				$scope.frmTitle = "Sửa Sinh Viên";
				$scope.id = id;
				$http.get(API + 'edit/' + id).success(function (response) {
					$scope.sinhvien = response;
				});
				break;
			default :
				$scope.frmTitle = "Không Biết";
				break;
		}
		$("#myModal").modal('show');
	}

	$scope.save = function (state,id) {
		if (state == "add") {
			var url = API + 'add';
			var data = $.param($scope.sinhvien);
			$http({
				method : 'POST',
				url : url,
				data : data,
				headers : {'Content-Type':'application/x-www-form-urlencoded'}
			})
			.success(function (response) {
				console.log(response);
				location.reload();
			})
			.error(function (response) {
				console.log(response);
				alert('Xảy ra lỗi vui lòng kiểm tra log');
			});
		}

		if (state == "edit") {
			var url = API + 'edit/' + id;
			var data = $.param($scope.sinhvien);
			$http({
				method : 'POST',
				url : url,
				data : data,
				headers : {'Content-Type':'application/x-www-form-urlencoded'}
			})
			.success(function (response) {
				console.log(response);
				location.reload();
			})
			.error(function (response) {
				console.log(response);
				alert('Xảy ra lỗi vui lòng kiểm tra log');
			});
		}
	}

	$scope.confirmDelete = function (id) {
		var isConfirmDelete = confirm('Bạn có chắc muốn xóa dòng dữ liệu này hay không');
		if (isConfirmDelete) {
			$http.get(API + 'delete/' + id)
				.success(function (response) {
					console.log(response);
					location.reload();
				})
				.error(function(response) {
					console.log(response);
					alert('Xảy ra lỗi vui lòng kiểm tra log');
				});;
		} else {
			return false;
		}
	}
});