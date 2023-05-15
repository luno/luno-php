<?php declare(strict_types=1);

namespace Luno;

class Client extends AbstractClient
{
  /**
   * CancelWithdrawal makes a call to DELETE /api/1/withdrawals/{id}.
   *
   * Cancels a withdrawal request.
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
   * GetCandles makes a call to GET /api/exchange/1/candles.
   *
   * Get candlestick market data from the specified time until now, from the oldest to the most recent.
   * 
   * Permissions required: <code>MP_None</code>
   */ 
  public function GetCandles(Request\GetCandles $req): Response\GetCandles
  {
    $res = $this->do("GET", "/api/exchange/1/candles", $req, true);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\GetCandles);
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
   * GetMove makes a call to GET /api/exchange/1/move.
   *
   * Get a specific move funds instruction by either <code>id</code> or
   * <code>client_move_id</code>. If both are provided an API error will be
   * returned.
   * 
   * This endpoint is in BETA, behaviour and specification may change without
   * any previous notice.
   * 
   * Permissions required: <code>MP_None</code>
   */ 
  public function GetMove(Request\GetMove $req): Response\GetMove
  {
    $res = $this->do("GET", "/api/exchange/1/move", $req, true);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\GetMove);
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
   * This request returns the best 100 `bids` and `asks`, for the currency pair specified, in the Order Book.
   * 
   * `asks` are sorted by price ascending and `bids` are sorted by price descending.
   * 
   * Multiple orders at the same price are aggregated.
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
   * This request returns all `bids` and `asks`, for the currency pair specified, in the Order Book.
   * 
   * `asks` are sorted by price ascending and `bids` are sorted by price descending.
   * 
   * Multiple orders at the same price are not aggregated.
   * 
   * <b>WARNING:</b> This may return a large amount of data.
   * Users are recommended to use the <a href="#operation/getOrderBookTop">top 100 bids and asks</a>
   * or the <a href="#tag/Streaming-API">Streaming API</a>.
   */ 
  public function GetOrderBookFull(Request\GetOrderBookFull $req): Response\GetOrderBookFull
  {
    $res = $this->do("GET", "/api/1/orderbook", $req, false);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\GetOrderBookFull);
  }

  /**
   * GetOrderV2 makes a call to GET /api/exchange/2/orders/{id}.
   *
   * Get the details for an order.
   * 
   * Permissions required: <code>Perm_R_Orders</code>
   */ 
  public function GetOrderV2(Request\GetOrderV2 $req): Response\GetOrderV2
  {
    $res = $this->do("GET", "/api/exchange/2/orders/{id}", $req, true);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\GetOrderV2);
  }

  /**
   * GetOrderV3 makes a call to GET /api/exchange/3/order.
   *
   * Get the details for an order by order reference or client order ID.
   * Exactly one of the two parameters must be provided, otherwise an error is returned.
   * Permissions required: <code>Perm_R_Orders</code>
   */ 
  public function GetOrderV3(Request\GetOrderV3 $req): Response\GetOrderV3
  {
    $res = $this->do("GET", "/api/exchange/3/order", $req, true);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\GetOrderV3);
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
   * ListMoves makes a call to GET /api/exchange/1/move/list_moves.
   *
   * Returns a list of the most recent moves ordered from newest to oldest.
   * This endpoint will list up to 100 most recent moves by default.
   * 
   * This endpoint is in BETA, behaviour and specification may change without
   * any previous notice.
   * 
   * Permissions required: <code>MP_None</code>
   */ 
  public function ListMoves(Request\ListMoves $req): Response\ListMoves
  {
    $res = $this->do("GET", "/api/exchange/1/move/list_moves", $req, true);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\ListMoves);
  }

  /**
   * ListOrders makes a call to GET /api/1/listorders.
   *
   * Returns a list of the most recently placed Orders.
   * Users can specify an optional <code>state=PENDING</code> parameter to restrict the results to only open Orders.
   * Users can also specify the market by using the optional currency pair parameter.
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
   * ListOrdersV2 makes a call to GET /api/exchange/2/listorders.
   *
   * Returns a list of the most recently placed orders ordered from newest to
   * oldest. This endpoint will list up to 100 most recent open orders by
   * default.
   * 
   * Permissions required: <Code>Perm_R_Orders</Code>
   */ 
  public function ListOrdersV2(Request\ListOrdersV2 $req): Response\ListOrdersV2
  {
    $res = $this->do("GET", "/api/exchange/2/listorders", $req, true);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\ListOrdersV2);
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
   * Returns a list of recent trades for the specified currency pair. At most
   * 100 trades are returned per call and never trades older than 24h. The
   * trades are sorted from newest to oldest.
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
   * ListTransfers makes a call to GET /api/exchange/1/transfers.
   *
   * Returns a list of the most recent confirmed transfers ordered from newest to
   * oldest.
   * This includes bank transfers, card payments, or on-chain transactions that
   * have been reflected on your account available balance.
   * 
   * Note that the Transfer `amount` is always a positive value and you should
   * use the `inbound` flag to determine the direction of the transfer.
   * 
   * If you need to paginate the results you can set the `before` parameter to
   * the last returned transfer `created_at` field value and repeat the request
   * until you have all the transfers you need.
   * This endpoint will list up to 100 transfers at a time by default.
   * 
   * This endpoint is in BETA, behaviour and specification may change without
   * any previous notice.
   * 
   * Permissions required: <Code>Perm_R_Transfers</Code>
   */ 
  public function ListTransfers(Request\ListTransfers $req): Response\ListTransfers
  {
    $res = $this->do("GET", "/api/exchange/1/transfers", $req, true);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\ListTransfers);
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
   * Markets makes a call to GET /api/exchange/1/markets.
   *
   * List all supported markets parameter information like price scale, min and
   * max order volumes and market ID.
   */ 
  public function Markets(Request\Markets $req): Response\Markets
  {
    $res = $this->do("GET", "/api/exchange/1/markets", $req, false);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\Markets);
  }

  /**
   * Move makes a call to POST /api/exchange/1/move.
   *
   * Move funds between two of your transactional accounts with the same currency
   * The funds may not be moved by the time the request returns. The GET method
   * can be used to poll for the move's status.
   * 
   * Note: moves will show as transactions, but not as transfers.
   * 
   * This endpoint is in BETA, behaviour and specification may change without
   * any previous notice.
   * 
   * Permissions required: <code>MP_None_Write</code>
   */ 
  public function Move(Request\Move $req): Response\Move
  {
    $res = $this->do("POST", "/api/exchange/1/move", $req, true);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\Move);
  }

  /**
   * PostLimitOrder makes a call to POST /api/1/postorder.
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
   * Send makes a call to POST /api/1/send.
   *
   * Send assets from an Account. Please note that the asset type sent must match the receive address of the same cryptocurrency of the same type - Bitcoin to Bitcoin, Ethereum to Ethereum, etc.
   * 
   * Sends can be made to cryptocurrency receive addresses.
   * 
   * <b>Note:</b> This is currently unavailable to users who are verified in countries with money travel rules.
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
   * SendFee makes a call to GET /api/1/send_fee.
   *
   * Calculate fees involved with a crypto send request.
   * 
   * Send address can be to a cryptocurrency receive address, or the email address of another Luno platform user.
   * 
   * Permissions required: <code>MP_None</code>
   */ 
  public function SendFee(Request\SendFee $req): Response\SendFee
  {
    $res = $this->do("GET", "/api/1/send_fee", $req, true);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\SendFee);
  }

  /**
   * StopOrder makes a call to POST /api/1/stoporder.
   *
   * Request to cancel an Order.
   * 
   * <b>Note!</b>: Once an Order has been completed, it can not be reversed.
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

  /**
   * Validate makes a call to POST /api/1/address/validate.
   *
   * Validate receive addresses, to which a customer wishes to make cryptocurrency sends, are verified under covering
   * regulatory requirements for the customer such as travel rules.
   * 
   * Permissions required: <code>Perm_W_Send</code>
   */ 
  public function Validate(Request\Validate $req): Response\Validate
  {
    $res = $this->do("POST", "/api/1/address/validate", $req, true);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\Validate);
  }
}

// vi: ft=php
