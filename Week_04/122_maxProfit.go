package main

func maxProfit(prices []int) int {
	res := 0
	for i := 1; i < len(prices); i++ {
		if prices[i] < prices[i-1] {
			continue
		}
		res += (prices[i] - prices[i-1])
	}
	return res
}

