window.SearchAjax = {
	/**
	 *
	 * @param {object} params
	 */
	init: function (params)
	{
		this.PAGE_COUNT = parseInt(params.PAGE_COUNT) ?? 0;
		this.PAGEN_NUM = parseInt(params.PAGEN_NUM) ?? 1;
		this.CURRENT_PAGE = parseInt(params.CURRENT_PAGE) ?? 0;
		this.AJAX_BTN_SELECTOR = params.AJAX_BTN_SELECTOR ?? "";

		this.bindEvents();
	},
	bindEvents: function ()
	{
		this.bindAjaxBtnClick();
	},
	bindAjaxBtnClick: function ()
	{
		let ajaxBtn = document.querySelector(this.AJAX_BTN_SELECTOR);

		if (ajaxBtn)
		{
			BX.bind(ajaxBtn, "click", function (e)
			{
				if (window.SearchAjax.hasNextPage())
				{
					BX.ajax({
						url: window.SearchAjax.getRequestUrl(),
						method: "GET",
						dataType: "html",
						onsuccess: function (response)
						{
							window.SearchAjax.handleResponse(response);
							window.SearchAjax.incrementCurrentPage();

							if (window.SearchAjax.isEndPageNav())
							{
								window.SearchAjax.hideAjaxBtn();
							}
						},
						onfailure: function ()
						{
							console.error("Ajax error");
						}
					});
				}
			});
		}
	},
	handleResponse: function (response)
	{
		let div = document.createElement("div");
		div.innerHTML = response;

		[...div.querySelector("#search-items").children].forEach(function (searchItem)
		{
			document.getElementById("search-items").append(searchItem);
		});
	},
	getNextPageNum: function()
	{
		return this.CURRENT_PAGE + 1;
	},
	hasNextPage: function()
	{
		return this.getNextPageNum() <= this.PAGE_COUNT;
	},
	getRequestUrl: function ()
	{
		let url = new URL(window.location.href);
		url.searchParams.set("PAGEN_"+this.PAGEN_NUM, this.getNextPageNum());
		return url.href;
	},
	incrementCurrentPage: function()
	{
		this.CURRENT_PAGE = this.getNextPageNum();
	},
	isEndPageNav: function()
	{
		return this.CURRENT_PAGE >= this.PAGE_COUNT;
	},
	hideAjaxBtn: function()
	{
		let ajaxBtn = document.querySelector(this.AJAX_BTN_SELECTOR);

		if (ajaxBtn)
		{
			BX.addClass(ajaxBtn.parentElement, "d-none");
		}
	}
};