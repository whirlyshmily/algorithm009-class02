package main


func lemonadeChange1(bills []int) bool {
	bill_map := make(map[int]int)
	bill_map[5] = 0
	bill_map[10] = 0
	bill_map[20] = 0
	for i := 0; i < len(bills); i++ {
		bill_map[bills[i]] += 1
		switch bills[i] {
		case 10:
			if bill_map[5] <= 0 {
				return false
			}
			bill_map[5] -= 1
			break
		case 20:
			if bill_map[5] <= 0 {
				return false
			}
			if bill_map[10] > 0 {
				bill_map[10] -= 1
				bill_map[5] -= 1
				break
			}
			if bill_map[5] >= 3 {
				bill_map[5] -= 3
				break
			}
			return false
		}
	}
	return true
}

func lemonadeChange(bills []int) bool {
	five := 0
	ten := 0
	for _, bill := range bills {
		if bill == 5 {
			five++
		} else if bill == 10{
			ten++
			five--
		} else {
			if ten > 0 {
				ten--
			}else {
				five -= 2
			}
			five--
		}
		if five < 0 {
			return false
		}
	}
	return true
}