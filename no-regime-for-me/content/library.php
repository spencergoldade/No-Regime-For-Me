<?php
/**
 * Content library – No regime for me
 *
 * This is the ONLY file you need to edit to add or change quotes, tips, and insights.
 * The plugin reads this file automatically. You do not need to touch any other plugin files.
 *
 * RULES TO FOLLOW:
 * - Each entry is one "item" in a list. Copy an existing entry, then change the text (and author/source for quotes).
 * - After every entry except the last in a section, put a COMMA. Missing or extra commas will break the file.
 * - Use straight double quotes (") around all text. If your quote contains a double quote, use a single quote (') inside.
 * - Keep short_quotes and admin_bar_tips very short (~10–12 words) for the admin bar.
 * - For tips, insights, and admin_bar_tips, do NOT add 'author' or 'source' – only 'text'.
 *
 * Need help? See readme.txt. Contributors: see the project repository for content and citation guidelines.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return [

	// =============================================================================
	// SHORT QUOTES – Cited quotes shown in the WordPress admin bar (top of screen).
	// Keep each quote very short (~10–12 words, ~60–80 characters) so it fits in that small space.
	// =============================================================================

	'short_quotes' => [
		[ 'text' => 'No regime for me.', 'author' => 'Anonymous', 'source' => '' ],
		[ 'text' => 'Eternal vigilance is the price of liberty.', 'author' => 'Thomas Jefferson', 'source' => '' ],
		[ 'text' => 'Power is not alluring to pure minds.', 'author' => 'Hamilton et al.', 'source' => 'The Federalist Papers' ],
		[ 'text' => 'If men were angels, no government would be necessary.', 'author' => 'James Madison', 'source' => 'The Federalist Papers' ],
		[ 'text' => 'Liberty may be endangered by the abuses of liberty as well as of power.', 'author' => 'James Madison', 'source' => 'The Federalist Papers' ],
	],

	// =============================================================================
	// ADMIN BAR TIPS – One-line original tips or insights (no attribution) for the admin bar.
	// Same brevity: ~10–12 words, ~60–80 characters. Only 'text'.
	// =============================================================================

	'admin_bar_tips' => [
		[ 'text' => 'Question authority. Stay curious.' ],
		[ 'text' => 'Small steps erode freedom; notice them.' ],
		[ 'text' => 'When someone says only I can fix it, be suspicious.' ],
		[ 'text' => 'Support independent media; they are early targets.' ],
		[ 'text' => 'Vote in every election, including local and midterm.' ],
		[ 'text' => 'Speak up when you hear dehumanizing language.' ],
		[ 'text' => 'Notice when norms are broken and name it.' ],
		[ 'text' => 'Build ties with neighbors; isolation helps authoritarians.' ],
		[ 'text' => 'Refuse to treat cruelty as normal.' ],
		[ 'text' => 'Ask who benefits when people are set against each other.' ],
		[ 'text' => 'When leaders attack the press, pay more attention to the press.' ],
		[ 'text' => 'Reject the idea that strength means never admitting error.' ],
		[ 'text' => 'Recognize propaganda: repeated slogans, us vs. them, scapegoating.' ],
		[ 'text' => 'Stand with those who are targeted first.' ],
		[ 'text' => 'Question loyalty tests that replace debate with obedience.' ],
		[ 'text' => 'Authoritarianism often starts with popular support.' ],
		[ 'text' => 'Keep a habit of reading history; it repeats when forgotten.' ],
		[ 'text' => 'Don\'t normalize violence or threats against opponents.' ],
		[ 'text' => 'Value the peaceful transfer of power.' ],
		[ 'text' => 'Speak in plain language; don\'t let euphemisms hide harm.' ],
		[ 'text' => 'Don\'t wait for a single big moment; small actions add up.' ],
		[ 'text' => 'Listen to people who have lived under authoritarian regimes.' ],
		[ 'text' => 'Hold leaders to their oaths and the law.' ],
		[ 'text' => 'Notice when language shifts from debate to elimination.' ],
		[ 'text' => 'Question anyone who says they alone speak for the people.' ],
		[ 'text' => 'When truth is under attack, share reliable sources.' ],
		[ 'text' => 'Complacency is a choice; so is resistance.' ],
		[ 'text' => 'It can\'t happen here is the thought that makes it possible.' ],
		[ 'text' => 'Demagogues need enemies; they create them when they don\'t exist.' ],
		[ 'text' => 'Ordinary people accommodate tyranny by deciding it doesn\'t affect them yet.' ],
		[ 'text' => 'Checks and balances exist because power corrupts; use them.' ],
		[ 'text' => 'Complacency is the soil in which authoritarianism grows.' ],
		[ 'text' => 'The erosion of norms often precedes the erosion of laws.' ],
		[ 'text' => 'Vigilance is not paranoia; history shows why it is necessary.' ],
		[ 'text' => 'When loyalty to a leader replaces loyalty to the constitution, democracy is at risk.' ],
		[ 'text' => 'The normalization of the unacceptable is how it becomes law.' ],
		[ 'text' => 'No one person should hold unchecked power.' ],
		[ 'text' => 'Fear is a tool; don\'t let it replace your judgment.' ],
		[ 'text' => 'Rights are not gifts from the state; they are limits on it.' ],
		[ 'text' => 'Dehumanizing language is the first step toward dehumanizing treatment.' ],
		[ 'text' => 'No regime for me is a choice you make every day.' ],
	],

	// =============================================================================
	// LONG QUOTES – Shown in the dashboard widget and/or on the site via shortcode.
	// 2–4 sentences, ~30–80 words. Display: "— Author, Source" underneath.
	// =============================================================================

	'long_quotes' => [
		[ 'text' => 'The accumulation of all powers, legislative, executive, and judiciary, in the same hands, whether of one, a few, or many, may justly be pronounced the very definition of tyranny.', 'author' => 'James Madison', 'source' => 'The Federalist Papers' ],
		[ 'text' => 'In framing a government which is to be administered by men over men, the great difficulty lies in this: you must first enable the government to control the governed; and in the next place oblige it to control itself.', 'author' => 'James Madison', 'source' => 'The Federalist Papers' ],
		[ 'text' => 'A dependence on the people is, no doubt, the primary control on the government; but experience has taught mankind the necessity of auxiliary precautions.', 'author' => 'James Madison', 'source' => 'The Federalist Papers' ],
		[ 'text' => 'Ambition must be made to counteract ambition. The interest of the man must be connected with the constitutional rights of the place.', 'author' => 'James Madison', 'source' => 'The Federalist Papers' ],
		[ 'text' => 'The means of defence against foreign danger have been always the instruments of tyranny at home.', 'author' => 'James Madison', 'source' => 'The Federalist Papers' ],
		[ 'text' => 'If a nation expects to be ignorant and free, in a state of civilisation, it expects what never was and never will be.', 'author' => 'Thomas Jefferson', 'source' => '' ],
		[ 'text' => 'I have sworn upon the altar of God eternal hostility against every form of tyranny over the mind of man.', 'author' => 'Thomas Jefferson', 'source' => '' ],
	],

	// =============================================================================
	// TIPS – Original tips (no attribution). Actionable advice. 1–2 sentences, ~15–40 words.
	// =============================================================================

	'tips' => [
		[ 'text' => 'When someone says only I can fix it, be suspicious.' ],
		[ 'text' => 'Support independent media and local journalism; they are early targets.' ],
		[ 'text' => 'Vote in every election, including local and midterm.' ],
		[ 'text' => 'Learn how your local government and school board work.' ],
		[ 'text' => 'Speak up when you hear dehumanizing language about groups of people.' ],
		[ 'text' => 'Protect the independence of courts and the rule of law.' ],
		[ 'text' => 'Don\'t share content you haven\'t verified; slow down before you retweet.' ],
		[ 'text' => 'Join or support groups that defend civil liberties and voting rights.' ],
		[ 'text' => 'Read primary sources; don\'t rely only on summaries or pundits.' ],
		[ 'text' => 'Notice when norms are broken and name it.' ],
		[ 'text' => 'Build ties with neighbors and community; isolation helps authoritarians.' ],
		[ 'text' => 'Refuse to treat cruelty as normal or inevitable.' ],
		[ 'text' => 'Support whistleblowers and a free press.' ],
		[ 'text' => 'Ask who benefits when people are set against each other.' ],
		[ 'text' => 'Teach the next generation why checks and balances matter.' ],
		[ 'text' => 'When leaders attack the press, pay more attention to the press.' ],
		[ 'text' => 'Defend the independence of election administration.' ],
		[ 'text' => 'Reject the idea that strength means never admitting error.' ],
		[ 'text' => 'Value expertise and evidence; question claims that dismiss them.' ],
		[ 'text' => 'Stay in the room when hard conversations happen; don\'t walk away.' ],
		[ 'text' => 'Don\'t let fear of conflict silence you on core principles.' ],
		[ 'text' => 'Support institutions that hold power accountable.' ],
		[ 'text' => 'Recognize propaganda: repeated slogans, us vs. them, scapegoating.' ],
		[ 'text' => 'Demand transparency; secrecy grows where accountability shrinks.' ],
		[ 'text' => 'Stand with those who are targeted first; they are the canary.' ],
		[ 'text' => 'Question loyalty tests that replace debate with obedience.' ],
		[ 'text' => 'Remember that authoritarianism often starts with popular support.' ],
		[ 'text' => 'Keep a habit of reading history; it repeats when forgotten.' ],
		[ 'text' => 'Reject the idea that the end justifies any means.' ],
		[ 'text' => 'Support fact-checkers and investigative journalism with your attention and money.' ],
		[ 'text' => 'When someone says we need to suspend rights for safety, ask for evidence and limits.' ],
		[ 'text' => 'Protect the right to protest; it is often the first to be restricted.' ],
		[ 'text' => 'Don\'t normalize violence or threats against opponents.' ],
		[ 'text' => 'Value the peaceful transfer of power; it is not automatic.' ],
		[ 'text' => 'Learn the warning signs of democratic backsliding.' ],
		[ 'text' => 'Speak in plain language; don\'t let euphemisms hide harm.' ],
		[ 'text' => 'Support civic education in schools and in public life.' ],
		[ 'text' => 'When institutions are weakened, strengthen the ones you can.' ],
		[ 'text' => 'Don\'t wait for a single big moment; small actions add up.' ],
		[ 'text' => 'Listen to people who have lived under authoritarian regimes.' ],
		[ 'text' => 'Reject the framing that you must choose between security and freedom without evidence.' ],
		[ 'text' => 'Hold leaders to their oaths and the law.' ],
		[ 'text' => 'Support international alliances that reinforce democratic norms.' ],
		[ 'text' => 'Notice when language shifts from debate to elimination.' ],
		[ 'text' => 'Defend the independence of the civil service.' ],
		[ 'text' => 'Don\'t let fatigue or despair stop you from participating.' ],
		[ 'text' => 'Question anyone who says they alone speak for the people.' ],
		[ 'text' => 'Protect the right to vote and make it easier for eligible voters to use it.' ],
		[ 'text' => 'When truth is under attack, share and cite reliable sources.' ],
		[ 'text' => 'Remember that complacency is a choice; so is resistance.' ],
	],

	// =============================================================================
	// INSIGHTS – Original insights (no attribution). Observations. 1–2 sentences, ~15–40 words.
	// =============================================================================

	'insights' => [
		[ 'text' => 'Authoritarianism often advances in small steps that seem minor at the time.' ],
		[ 'text' => 'It can\'t happen here is the thought that makes it possible.' ],
		[ 'text' => 'Demagogues need enemies; they create them when they don\'t exist.' ],
		[ 'text' => 'The state that puts itself above the individual is the one to watch.' ],
		[ 'text' => 'Ordinary people accommodate tyranny by deciding it doesn\'t affect them yet.' ],
		[ 'text' => 'First they came is a warning, not a fate; you can refuse to be silent.' ],
		[ 'text' => 'Propaganda works by repetition and by shutting out other voices.' ],
		[ 'text' => 'When the press is called the enemy, the next step is to treat it that way.' ],
		[ 'text' => 'Checks and balances exist because power corrupts; they must be used.' ],
		[ 'text' => 'Complacency is the soil in which authoritarianism grows.' ],
		[ 'text' => 'Strongmen promise order; they deliver dependence and fear.' ],
		[ 'text' => 'The erosion of norms often precedes the erosion of laws.' ],
		[ 'text' => 'Scapegoating unifies some by destroying others; reject the bargain.' ],
		[ 'text' => 'Vigilance is not paranoia; history shows why it is necessary.' ],
		[ 'text' => 'Liberty requires both the will and the means to defend it.' ],
		[ 'text' => 'Those who say we must not politicize something are often protecting power.' ],
		[ 'text' => 'The rule of law protects the weak from the strong.' ],
		[ 'text' => 'When loyalty to a leader replaces loyalty to the constitution, democracy is at risk.' ],
		[ 'text' => 'Disinformation aims to confuse so that people give up on truth.' ],
		[ 'text' => 'Institutions outlast individuals; that is why they are attacked.' ],
		[ 'text' => 'The promise of safety in exchange for freedom is usually a trap.' ],
		[ 'text' => 'Small compromises of principle prepare the way for large ones.' ],
		[ 'text' => 'A free society depends on citizens who act like it.' ],
		[ 'text' => 'The phrase we have no choice is often the moment when choice still exists.' ],
		[ 'text' => 'Authoritarians need enablers more than they need true believers.' ],
		[ 'text' => 'History does not repeat exactly, but it rhymes; learn the patterns.' ],
		[ 'text' => 'When criticism is called treason, criticism is what is needed most.' ],
		[ 'text' => 'The separation of powers is there for when one branch fails.' ],
		[ 'text' => 'Rights that are not exercised can be taken for granted and then taken away.' ],
		[ 'text' => 'Propaganda targets emotion first; reason and facts are secondary.' ],
		[ 'text' => 'The normalization of the unacceptable is how the unacceptable becomes law.' ],
		[ 'text' => 'No one person should hold unchecked power; that is the lesson of tyranny.' ],
		[ 'text' => 'Solidarity across groups makes authoritarian divide-and-rule harder.' ],
		[ 'text' => 'The first duty of a citizen in a free society is to protect that freedom.' ],
		[ 'text' => 'When truth is contested, the contest itself is a form of power.' ],
		[ 'text' => 'Fear is a tool; don\'t let it replace your judgment.' ],
		[ 'text' => 'Democratic backsliding is often popular before it is irreversible.' ],
		[ 'text' => 'The press that holds power to account is not the enemy of the people.' ],
		[ 'text' => 'Rights are not gifts from the state; they are limits on it.' ],
		[ 'text' => 'Those who ignore history are not doomed to repeat it; everyone is, if we forget.' ],
		[ 'text' => 'Complacency and resistance are both choices; only one preserves freedom.' ],
		[ 'text' => 'The strongman\'s promise of order is the prelude to disorder he will blame on others.' ],
		[ 'text' => 'When institutions are politicized, the politicizers benefit; the public does not.' ],
		[ 'text' => 'Eternal vigilance is not a slogan; it is a practice.' ],
		[ 'text' => 'The moment you think it cannot happen here is when you stop guarding against it.' ],
		[ 'text' => 'Dehumanizing language is the first step toward dehumanizing treatment.' ],
		[ 'text' => 'Power that is not checked does not stay in good hands for long.' ],
		[ 'text' => 'A republic requires more than elections; it requires a culture that values freedom.' ],
		[ 'text' => 'The abuse of power often begins with the abuse of language.' ],
		[ 'text' => 'No regime for me is a choice you make every day, in small ways.' ],
		[ 'text' => 'Freedom is not the default; it is maintained by effort and care.' ],
		[ 'text' => 'When people stop believing they can change things, authoritarians win.' ],
		[ 'text' => 'The goal of propaganda is not to convince but to confuse and exhaust.' ],
		[ 'text' => 'Stand for something; neutrality in the face of tyranny helps the tyrant.' ],
		[ 'text' => 'The past is not past; it informs the present if we let it.' ],
		[ 'text' => 'Resist the urge to normalize what is not normal.' ],
		[ 'text' => 'One person speaking up can make it easier for others to follow.' ],
		[ 'text' => 'The rule of law is what stands between democracy and dictatorship.' ],
		[ 'text' => 'Question authority; it is the duty of a free citizen.' ],
		[ 'text' => 'Small acts of resistance and solidarity add up; do not underestimate them.' ],
	],

];
