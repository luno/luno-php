<?php declare(strict_types=1);

namespace Luno;

class Client extends AbstractClient
{
  /**
   * CancelWithdrawal makes a call to DELETE /api/1/withdrawals/{id}.
   *
   * Cancel a withdrawal request. This can only be done if the request is still
   * in state <code>PENDING</code>.
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
   * Create an additional account for the specified currency.
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
   * Creates a new quote to buy or sell a particular amount.
   * 
   * You can specify either the exact amount that you want to pay or the exact
   * amount that you want too receive.
   * 
   * For example, to buy exactly 0.1 Bitcoin using ZAR, you would create a quote
   * to BUY 0.1 XBTZAR. The returned quote includes the appropriate ZAR amount. To
   * buy Bitcoin using exactly ZAR 100, you would create a quote to SELL 100
   * ZARXBT. The returned quote specifies the Bitcoin as the counter amount that
   * will be returned.
   * 
   * An error is returned if your account is not verified for the currency pair,
   * or if your account would have insufficient balance to ever exercise the
   * quote.
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
   * Creates a new withdrawal request.
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
   * Discard a quote. Once a quote has been discarded, it cannot be exercised even
   * if it has not expired yet.
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
   * Exercise a quote to perform the trade. If there is sufficient balance
   * available in your account, it will be debited and the counter amount
   * credited.
   * 
   * An error is returned if the quote has expired or if you have insufficient
   * available balance.
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
   * Return the list of all accounts and their respective balances.
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
   * Returns your fees and 30 day trading volume (as of midnight) for a given
   * pair.
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
   * amount received via the address. You can specify an optional address
   * parameter to return information for a non-default receive address. In the
   * response, total_received is the total confirmed Bitcoin amount received
   * excluding unconfirmed transactions. total_unconfirmed is the total sum of
   * unconfirmed receive transactions.
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
   * GetOrder makes a call to GET /api/1/orders/{id}.
   *
   * Get an order by its ID.
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
   * Returns a list of the top 100 bids and asks in the order book.
   * Ask orders are sorted by price ascending.
   * Bid orders are sorted by price descending.
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
   * Returns a list of all bids and asks in the order book.
   * Ask orders are sorted by price ascending.
   * Bid orders are sorted by price descending.
   * Multiple orders at the same price are not aggregated.
   * 
   * Warning: This may return a large amount of data. Generally you should rather
   * use GetOrderBook or the Streaming API.
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
   * Get the latest status of a quote.
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
   * Returns the latest ticker indicators.
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
   * ListOrders makes a call to GET /api/1/listorders.
   *
   * Returns a list of the most recently placed orders. You can specify an
   * optional <code>state=PENDING</code> parameter to restrict the results to only
   * open orders. You can also specify the market by using the optional pair
   * parameter. The list is truncated after 100 items.
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
   * Return a list of all pending transactions related to the account.
   * 
   * Unlike account entries, pending transactions are not numbered, and may be
   * reordered, deleted or updated at any time.
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
   * Returns a list of the most recent trades. At most 100 results are returned
   * per call.
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
   * Returns a list of your recent trades for a given pair, sorted by oldest
   * first. If <code>before</code> is specified, then the trades are returned
   * sorted by most-recent first.
   * 
   * <code>type</code> in the response indicates the type of order that you placed
   * in order to participate in the trade. Possible types: <code>BID</code>,
   * <code>ASK</code>.
   * 
   * If <code>is_buy</code> in the response is true, then the order which
   * completed the trade (market taker) was a bid order.
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
   * Create a new trade order.
   * 
   * Warning! Orders cannot be reversed once they have executed. Please ensure
   * your program has been thoroughly tested before submitting orders.
   * 
   * If no <code>base_account_id</code> or <code>counter_account_id</code> are
   * specified, your default base currency or counter currency account will be
   * used. You can find your account IDs by calling the
   * <a href="#operation/getBalances">Balances</a> API.
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
   * Create a new market order.
   * 
   * A market order executes immediately, and either buys as much Bitcoin or
   * Ethereum that can be bought for a set amount of fiat currency, or sells a
   * set amount of Bitcoin or Ethereum for as much fiat as possible.
   * 
   * Warning! Orders cannot be reversed once they have executed. Please ensure
   * your program has been thoroughly tested before submitting orders.
   * 
   * If no base_account_id or counter_account_id are specified, your default base
   * currency or counter currency account will be used. You can find your account
   * IDs by calling the <a href="#operation/getBalances">Balances</a> API.
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
   * Send Bitcoin from your account to a Bitcoin address or email address. Send
   * Ethereum from your account to an Ethereum address.
   * 
   * If the email address is not associated with an existing Luno account, an
   * invitation to create an account and claim the funds will be sent.
   * 
   * Warning! Cryptocurrency transactions are irreversible. Please ensure your
   * program has been thoroughly tested before using this call.
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
   * StopOrder makes a call to POST /api/1/stoporder.
   *
   * Request to stop an order.
   * 
   * Permissions required: <code>Perm_W_Orders</code>
   */ 
  public function StopOrder(Request\StopOrder $req): Response\StopOrder
  {
    $res = $this->do("POST", "/api/1/stoporder", $req, true);
    $mapper = new \JsonMapper();
    return $mapper->map($res, new Response\StopOrder);
  }
}

// vi: ft=php
