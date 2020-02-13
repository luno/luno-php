<?php declare(strict_types=1);

namespace Luno;

class Client extends AbstractClient
{
  /**
   * CancelWithdrawal makes a call to DELETE /api/1/withdrawals/{id}.
   *
   * Cancel a withdrawal request.
   * This can only be done if the request is still in state <code>PENDING</code>.
   * 
   * Permissions required: <code>Perm_W_Withdrawals</code>
   */ 
  public function CancelWithdrawal(Request\CancelWithdrawal $req): Response\CancelWithdrawal
  {
    $res = $this->do("DELETE", "/api/1/withdrawals/{id}", $req, true);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\CancelWithdrawal);
  }

  /**
   * CreateAccount makes a call to POST /api/1/accounts.
   *
   * This request creates an Account for the specified currency.  Please note that the balances for the Account will be displayed based on the <code>asset</code> value, which is the currency the Account is based on.
   * 
   * Permissions required: <code>Perm_W_Addresses</code>
   */ 
  public function CreateAccount(Request\CreateAccount $req): Response\CreateAccount
  {
    $res = $this->do("POST", "/api/1/accounts", $req, true);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\CreateAccount);
  }

  /**
   * CreateFundingAddress makes a call to POST /api/1/funding_address.
   *
   * Allocates a new receive address to your account. There is a rate limit of 1
   * address per hour, but bursts of up to 10 addresses are allowed. Only 1
   * Ethereum receive address can be created.
   * 
   * Permissions required: <code>Perm_W_Addresses</code>
   */ 
  public function CreateFundingAddress(Request\CreateFundingAddress $req): Response\CreateFundingAddress
  {
    $res = $this->do("POST", "/api/1/funding_address", $req, true);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\CreateFundingAddress);
  }

  /**
   * CreateQuote makes a call to POST /api/1/quotes.
   *
   * Creates a new quote to buy or sell a particular amount of a base currency for a counter currency.
   * 
   * Users can specify either the exact amount to pay or the exact amount to receive.
   * 
   * For example, to buy exactly 0.1 Bitcoin using ZAR, you would create a quote to BUY 0.1 XBTZAR.
   * The returned quote includes the appropriate ZAR amount.
   * To buy Bitcoin using exactly ZAR 100, create a quote to SELL 100 ZARXBT.
   * The returned quote specifies the Bitcoin as the counter amount returned.
   * 
   * An error is returned if the Account is not verified for the currency pair,
   * or if the Account would have insufficient balance to ever exercise the quote.
   * 
   * Permissions required: <code>Perm_W_Orders</code>
   */ 
  public function CreateQuote(Request\CreateQuote $req): Response\CreateQuote
  {
    $res = $this->do("POST", "/api/1/quotes", $req, true);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\CreateQuote);
  }

  /**
   * CreateWithdrawal makes a call to POST /api/1/withdrawals.
   *
   * Creates a new withdrawal request to the specified beneficiary.
   * 
   * Permissions required: <code>Perm_W_Withdrawals</code>
   */ 
  public function CreateWithdrawal(Request\CreateWithdrawal $req): Response\CreateWithdrawal
  {
    $res = $this->do("POST", "/api/1/withdrawals", $req, true);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\CreateWithdrawal);
  }

  /**
   * DiscardQuote makes a call to DELETE /api/1/quotes/{id}.
   *
   * Discard a Quote.
   * Once a Quote has been discarded, it cannot be exercised even if it has not expired.
   * 
   * Permissions required: <code>Perm_W_Orders</code>
   */ 
  public function DiscardQuote(Request\DiscardQuote $req): Response\DiscardQuote
  {
    $res = $this->do("DELETE", "/api/1/quotes/{id}", $req, true);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\DiscardQuote);
  }

  /**
   * ExerciseQuote makes a call to PUT /api/1/quotes/{id}.
   *
   * Exercise a quote to perform the Trade.
   * If there is sufficient balance available in the Account,
   * it will be debited and the counter amount credited.
   * 
   * An error is returned if the quote has expired or if the Account has insufficient available balance.
   * 
   * Permissions required: <code>Perm_W_Orders</code>
   */ 
  public function ExerciseQuote(Request\ExerciseQuote $req): Response\ExerciseQuote
  {
    $res = $this->do("PUT", "/api/1/quotes/{id}", $req, true);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\ExerciseQuote);
  }

  /**
   * GetBalances makes a call to GET /api/1/balance.
   *
   * The list of all Accounts and their respective balances for the requesting user.
   * 
   * Permissions required: <code>Perm_R_Balance</code>
   */ 
  public function GetBalances(Request\GetBalances $req): Response\GetBalances
  {
    $res = $this->do("GET", "/api/1/balance", $req, true);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\GetBalances);
  }

  /**
   * GetFeeInfo makes a call to GET /api/1/fee_info.
   *
   * Returns the fees and 30 day trading volume (as of midnight) for a given currency pair.  For complete details, please see <a href="en/countries">Fees & Features</a>.
   * 
   * Permissions required: <code>Perm_R_Orders</code>
   */ 
  public function GetFeeInfo(Request\GetFeeInfo $req): Response\GetFeeInfo
  {
    $res = $this->do("GET", "/api/1/fee_info", $req, true);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\GetFeeInfo);
  }

  /**
   * GetFundingAddress makes a call to GET /api/1/funding_address.
   *
   * Returns the default receive address associated with your account and the
   * amount received via the address. Users can specify an optional address parameter to return information for a non-default receive address.
   * 
   * In the response, <code>total_received</code> is the total confirmed amount received excluding unconfirmed transactions.
   * <code>total_unconfirmed</code> is the total sum of unconfirmed receive transactions.
   * 
   * Permissions required: <code>Perm_R_Addresses</code>
   */ 
  public function GetFundingAddress(Request\GetFundingAddress $req): Response\GetFundingAddress
  {
    $res = $this->do("GET", "/api/1/funding_address", $req, true);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\GetFundingAddress);
  }

  /**
   * GetLightningReceive makes a call to GET /api/1/lightning/receive/{id}.
   *
   * <b>Alpha warning!</b> The Lightning API is still in Alpha stage.
   * The risks are limited api availability and channel capacity.
   * 
   * Lookup the status of a Lightning Receive Invoice.
   * 
   * Permissions required: <code>Perm_W_Send</code>
   */ 
  public function GetLightningReceive(Request\GetLightningReceive $req): Response\GetLightningReceive
  {
    $res = $this->do("GET", "/api/1/lightning/receive/{id}", $req, true);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\GetLightningReceive);
  }

  /**
   * GetOrder makes a call to GET /api/1/orders/{id}.
   *
   * Get an Order's details by its ID.
   * 
   * Permissions required: <code>Perm_R_Orders</code>
   */ 
  public function GetOrder(Request\GetOrder $req): Response\GetOrder
  {
    $res = $this->do("GET", "/api/1/orders/{id}", $req, true);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\GetOrder);
  }

  /**
   * GetOrderBook makes a call to GET /api/1/orderbook_top.
   *
   * Returns a list of the top 100 <em>bids</em> and <em>asks</em> for the currency pair specified in the Order Book.
   * 
   * Ask Orders are sorted by price ascending.
   * 
   * Bid Orders are sorted by price descending.
   * 
   * Orders of the same price are aggregated.
   */ 
  public function GetOrderBook(Request\GetOrderBook $req): Response\GetOrderBook
  {
    $res = $this->do("GET", "/api/1/orderbook_top", $req, false);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\GetOrderBook);
  }

  /**
   * GetOrderBookFull makes a call to GET /api/1/orderbook.
   *
   * This request returns a list of all <em>bids</em> and <em>asks</em> for the currency pair specified in the Order Book.
   * 
   * Ask orders are sorted by price ascending.
   * 
   * Bid orders are sorted by price descending.
   * 
   * Multiple orders at the same price are not aggregated.
   * 
   * <b>Warning:</b> This may return a large amount of data.
   * Users are recommended to use the <a href="#operation/getOrderBook">top 100 bids and asks</a>
   * or the <a href="#tag/streaming-API-(beta)">Streaming API</a>.
   */ 
  public function GetOrderBookFull(Request\GetOrderBookFull $req): Response\GetOrderBookFull
  {
    $res = $this->do("GET", "/api/1/orderbook", $req, false);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\GetOrderBookFull);
  }

  /**
   * GetQuote makes a call to GET /api/1/quotes/{id}.
   *
   * Get the latest status of a quote by its id.
   * 
   * Permissions required: <code>Perm_R_Orders</code>
   */ 
  public function GetQuote(Request\GetQuote $req): Response\GetQuote
  {
    $res = $this->do("GET", "/api/1/quotes/{id}", $req, true);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\GetQuote);
  }

  /**
   * GetTicker makes a call to GET /api/1/ticker.
   *
   * Returns the latest ticker indicators for the specified currency pair.
   * 
   * Please see the <a href="#tag/currency ">Currency list</a> for the complete list of supported currency pairs.
   */ 
  public function GetTicker(Request\GetTicker $req): Response\GetTicker
  {
    $res = $this->do("GET", "/api/1/ticker", $req, false);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\GetTicker);
  }

  /**
   * GetTickers makes a call to GET /api/1/tickers.
   *
   * Returns the latest ticker indicators from all active Luno exchanges.
   * 
   * Please see the <a href="#tag/currency ">Currency list</a> for the complete list of supported currency pairs.
   */ 
  public function GetTickers(Request\GetTickers $req): Response\GetTickers
  {
    $res = $this->do("GET", "/api/1/tickers", $req, false);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\GetTickers);
  }

  /**
   * GetWithdrawal makes a call to GET /api/1/withdrawals/{id}.
   *
   * Returns the status of a particular withdrawal request.
   * 
   * Permissions required: <code>Perm_R_Withdrawals</code>
   */ 
  public function GetWithdrawal(Request\GetWithdrawal $req): Response\GetWithdrawal
  {
    $res = $this->do("GET", "/api/1/withdrawals/{id}", $req, true);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\GetWithdrawal);
  }

  /**
   * ListBeneficiariesResponse makes a call to GET /api/1/beneficiaries.
   *
   * Returns a list of bank beneficiaries.
   * 
   * Permissions required: <code>Perm_R_Beneficiaries</code>
   */ 
  public function ListBeneficiariesResponse(Request\ListBeneficiariesResponse $req): Response\ListBeneficiariesResponse
  {
    $res = $this->do("GET", "/api/1/beneficiaries", $req, true);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\ListBeneficiariesResponse);
  }

  /**
   * ListOrders makes a call to GET /api/1/listorders.
   *
   * Returns a list of the most recently placed Orders.
   * Users can specify an optional <code>state=PENDING</code> parameter to restrict the results to only open Orders.
   * Users can also specify the market by using the optional currency pair parameter.
   * The list is truncated after 100 items.
   * 
   * Permissions required: <code>Perm_R_Orders</code>
   */ 
  public function ListOrders(Request\ListOrders $req): Response\ListOrders
  {
    $res = $this->do("GET", "/api/1/listorders", $req, true);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\ListOrders);
  }

  /**
   * ListPendingTransactions makes a call to GET /api/1/accounts/{id}/pending.
   *
   * Return a list of all transactions that have not completed for the Account.
   * 
   * Pending transactions are not numbered, and may be reordered, deleted or updated at any time.
   * 
   * Permissions required: <code>Perm_R_Transactions</code>
   */ 
  public function ListPendingTransactions(Request\ListPendingTransactions $req): Response\ListPendingTransactions
  {
    $res = $this->do("GET", "/api/1/accounts/{id}/pending", $req, true);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\ListPendingTransactions);
  }

  /**
   * ListTrades makes a call to GET /api/1/trades.
   *
   * Returns a list of the most recent Trades for the specified currency pair in the last 24 hours.
   * At most 100 results are returned per call.
   * 
   * Please see the <a href="#tag/currency ">Currency list</a> for the complete list of supported currency pairs.
   */ 
  public function ListTrades(Request\ListTrades $req): Response\ListTrades
  {
    $res = $this->do("GET", "/api/1/trades", $req, false);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\ListTrades);
  }

  /**
   * ListTransactions makes a call to GET /api/1/accounts/{id}/transactions.
   *
   * Return a list of transaction entries from an account.
   * 
   * Transaction entry rows are numbered sequentially starting from 1, where 1 is
   * the oldest entry. The range of rows to return are specified with the
   * <code>min_row</code> (inclusive) and <code>max_row</code> (exclusive)
   * parameters. At most 1000 rows can be requested per call.
   * 
   * If <code>min_row</code> or <code>max_row</code> is non-positive, the range
   * wraps around the most recent row. For example, to fetch the 100 most recent
   * rows, use <code>min_row=-100</code> and <code>max_row=0</code>.
   * 
   * Permissions required: <code>Perm_R_Transactions</code>
   */ 
  public function ListTransactions(Request\ListTransactions $req): Response\ListTransactions
  {
    $res = $this->do("GET", "/api/1/accounts/{id}/transactions", $req, true);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\ListTransactions);
  }

  /**
   * ListUserTrades makes a call to GET /api/1/listtrades.
   *
   * Returns a list of the recent Trades for a given currency pair for this user, sorted by oldest first.
   * If <code>before</code> is specified, then Trades are returned sorted by most-recent first.
   * 
   * <code>type</code> in the response indicates the type of Order that was placed to participate in the trade.
   * Possible types: <code>BID</code>, <code>ASK</code>.
   * 
   * If <code>is_buy</code> in the response is true, then the Order which completed the trade (market taker) was a Bid Order.
   * 
   * Results of this query may lag behind the latest data.
   * 
   * Permissions required: <code>Perm_R_Orders</code>
   */ 
  public function ListUserTrades(Request\ListUserTrades $req): Response\ListUserTrades
  {
    $res = $this->do("GET", "/api/1/listtrades", $req, true);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\ListUserTrades);
  }

  /**
   * ListWithdrawals makes a call to GET /api/1/withdrawals.
   *
   * Returns a list of withdrawal requests.
   * 
   * Permissions required: <code>Perm_R_Withdrawals</code>
   */ 
  public function ListWithdrawals(Request\ListWithdrawals $req): Response\ListWithdrawals
  {
    $res = $this->do("GET", "/api/1/withdrawals", $req, true);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\ListWithdrawals);
  }

  /**
   * PostLimitOrder makes a call to POST /api/1/postorder.
   *
   * Create a new Trade Order.
   * 
   * <b>Warning!</b> Orders cannot be reversed once they have executed.
   * Please ensure your program has been thoroughly tested before submitting Orders.
   * 
   * If no <code>base_account_id</code> or <code>counter_account_id</code> are specified,
   * your default base currency or counter currency account will be used.
   * You can find your Account IDs by calling the <a href="#operation/getBalances">Balances</a> API.
   * 
   * Permissions required: <code>Perm_W_Orders</code>
   */ 
  public function PostLimitOrder(Request\PostLimitOrder $req): Response\PostLimitOrder
  {
    $res = $this->do("POST", "/api/1/postorder", $req, true);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\PostLimitOrder);
  }

  /**
   * PostMarketOrder makes a call to POST /api/1/marketorder.
   *
   * Create a new Market Order.
   * 
   * A Market Order executes immediately, and either buys as much of the asset that can be bought for a set amount of fiat currency, or sells a set amount of the asset for as much as possible.
   * 
   * <b>Warning!</b> Orders cannot be reversed once they have executed.
   * Please ensure your program has been thoroughly tested before submitting Orders.
   * 
   * If no <code>base_account_id</code> or <code>counter_account_id</code> are specified, the default base currency or counter currency account will be used.
   * Users can find their account IDs by calling the <a href="#operation/getBalances">Balances</a> request.
   * 
   * Permissions required: <code>Perm_W_Orders</code>
   */ 
  public function PostMarketOrder(Request\PostMarketOrder $req): Response\PostMarketOrder
  {
    $res = $this->do("POST", "/api/1/marketorder", $req, true);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\PostMarketOrder);
  }

  /**
   * ReceiveLightning makes a call to POST /api/1/lightning/receive.
   *
   * <b>Alpha warning!</b> The Lightning API is still in Alpha stage.
   * The risks are limited api availability and channel capacity.
   * 
   * Create a lightning invoice which can be used to receive
   * BTC payments over the lightning network.
   * 
   * Permissions required: <code>Perm_W_Send</code>
   */ 
  public function ReceiveLightning(Request\ReceiveLightning $req): Response\ReceiveLightning
  {
    $res = $this->do("POST", "/api/1/lightning/receive", $req, true);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\ReceiveLightning);
  }

  /**
   * Send makes a call to POST /api/1/send.
   *
   * Send assets from an Account. Please note that the asset type sent must match the receive address of the same cryptocurrency of the same type - Bitcoin to Bitcoin, Ethereum to Ethereum, etc.
   * 
   * Sends can be to a cryptocurrency receive address, or the email address of another Luno platform user.
   * 
   * Permissions required: <code>Perm_W_Send</code>
   */ 
  public function Send(Request\Send $req): Response\Send
  {
    $res = $this->do("POST", "/api/1/send", $req, true);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\Send);
  }

  /**
   * SendLightning makes a call to POST /api/1/lightning/send.
   *
   * <b>Alpha warning!</b> The Lightning API is still in Alpha stage.
   * The risks are limited api availability and channel capacity.
   * 
   * Send Bitcoin over the Lightning network from your Bitcoin Account.
   * 
   * Warning! Cryptocurrency transactions are irreversible. Please ensure your
   * program has been thoroughly tested before using this call.
   * 
   * Permissions required: <code>Perm_W_Send</code>
   */ 
  public function SendLightning(Request\SendLightning $req): Response\SendLightning
  {
    $res = $this->do("POST", "/api/1/lightning/send", $req, true);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\SendLightning);
  }

  /**
   * StopOrder makes a call to POST /api/1/stoporder.
   *
   * Request to stop an Order.
   * 
   * <b>Note!</b>: Once as Order has been completed, it can not be reversed.
   * The return value from this request will indicate if the Stop request was successful or not.
   * 
   * Permissions required: <code>Perm_W_Orders</code>
   */ 
  public function StopOrder(Request\StopOrder $req): Response\StopOrder
  {
    $res = $this->do("POST", "/api/1/stoporder", $req, true);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\StopOrder);
  }

  /**
   * UpdateAccountName makes a call to PUT /api/1/accounts/{id}/name.
   *
   * Update the name of an account with a given ID.
   * 
   * Permissions required: <code>Perm_W_Addresses</code>
   */ 
  public function UpdateAccountName(Request\UpdateAccountName $req): Response\UpdateAccountName
  {
    $res = $this->do("PUT", "/api/1/accounts/{id}/name", $req, true);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\UpdateAccountName);
  }
}

// vi: ft=php
