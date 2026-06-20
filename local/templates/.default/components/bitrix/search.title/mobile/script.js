BX.ready(function ()
{
	window.SearchTitleComponent = class
	{
		constructor(params)
		{
			this.timeout = null;
			this.searchId = params.searchId;
			this.containerId = params.containerId;
			this.ajaxUrl = params.ajaxUrl;

			this.searchTimeout = this.searchTimeout.bind(this);
			this.onKeyUp = this.onKeyUp.bind(this);
			this.onSuccess = this.onSuccess.bind(this)
			this.onFailure = this.onFailure.bind(this)

			this.handleEvents();
		}

		handleEvents()
		{
			let searchInput = BX(this.searchId);

			if (searchInput)
			{
				BX.bind(searchInput, "keyup", this.onKeyUp);
			}
		}

		onKeyUp ()
		{
			let searchInput = BX(this.searchId)
			let moreBtn = document.querySelector('#' + this.containerId + ' .more-btn');
			let url = new URL(moreBtn.href);
			url.searchParams.set("q", searchInput.value);
			moreBtn.href = url.href;

			clearTimeout(this.timeout);
			this.timeout = setTimeout(this.searchTimeout, 500);
		}

		searchTimeout()
		{
			let searchInput = BX(this.searchId)
			if (searchInput)
			{
				BX.ajax({
					url: this.ajaxUrl,
					method: "POST",
					data: {
						'ajax_call': 'y',
						"q": searchInput.value,
						'INPUT_ID': this.searchId,
						'l': 1
					},
					onsuccess: this.onSuccess,
					onfailure: this.onFailure
				});
			}
		}

		onSuccess(response)
		{
			let searchedList = document.querySelector('#' + this.containerId + ' .list-group');
			searchedList.innerHTML = "";
			if (response)
			{
				searchedList.innerHTML = response;
			}
		}

		onFailure()
		{
			console.error("Search ajax error");
		}
	};
});